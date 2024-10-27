<link rel="stylesheet" href="{{ asset('css/modal.css') }}">

<div class="modal fade" id="modal-create-animal" tabindex="-1" aria-labelledby="modal-create-animal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border border-secondary rounded-3">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="modal-create-animal-label">Adicionar Animal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="create-animal-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome do animal</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="specie" class="form-label">Espécie</label>
                            <input type="text" class="form-control" id="specie" name="specie" required>
                        </div>
                        <div class="col">
                            <label for="race" class="form-label">Raça</label>
                            <input type="text" class="form-control" id="race" name="race" required>
                        </div>
                        <div class="col">
                            <label for="birth" class="form-label">Nascimento</label>
                            <input type="date" class="form-control" id="birth" name="birth" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tutor" class="form-label">Tutor</label>
                        <input type="text" class="form-control" id="tutor" name="tutor" required>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Adicionar Foto</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="create-animal-form" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#create-animal-form').on('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);
            formData.append('_token', "{{ csrf_token() }}");

            $.ajax({
                type: "POST",
                url: "", // Substitua pela URL correta para o seu endpoint
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#modal-create-animal').modal('hide');
                    $('#create-animal-form')[0].reset();
                },
                error: function (xhr) {
                    alert('Erro ao adicionar animal, verifique os dados e tente novamente');
                }
            });
        });
    });
</script>
