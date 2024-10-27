<link rel="stylesheet" href="{{ asset('css/modal.css') }}">

<div class="modal fade" id="modal-create-client" tabindex="-1" aria-labelledby="modal-create-client-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border border-secondary rounded-3">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="modal-create-client-label">Cadastrar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="create-client-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" required>
                        </div>
                        <div class="col">
                            <label for="birth" class="form-label">Nascimento</label>
                            <input type="date" class="form-control" id="birth" name="birth">
                        </div>
                        <div class="col">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep" required>
                        </div>
                        <div class="col-sm-2">
                            <label for="uf" class="form-label">UF</label>
                            <input type="text" class="form-control" id="uf" name="uf" required>
                        </div>
                        <div class="col">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <div class="col">
                            <label for="neighborhood" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="neighborhood" name="neighborhood" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="street" class="form-label">Logradouro</label>
                        <input type="text" class="form-control" id="street" name="street" required>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="create-client-form" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#create-client-form').on('submit', function (e) {
            e.preventDefault();

            let formData = new  FormData(this);
            formData.append('_token', "{{ csrf_token() }}");

            $.ajax({
                type: "POST",
                url: "",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#modal-create-client').modal('hide');
                    $('#create-client-form')[0].reset();
                },
                error: function (xhr) {
                    alert('Erro ao criar cliente, verifique os dados e tente novamente');
                }
            });
        });
    });
</script>
