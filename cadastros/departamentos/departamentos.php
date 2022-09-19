<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastros</title>
</head>

<body>
    <div class="row w-100 d-flex justify-content-center">
        <div class="container wrapper ">
            <h3 class="display-5">Cadastros - Departamentos</h3>
            <div class="row  ">
                <div class="col-md-3 col-sm-6 mt-1 "><a href="?action=select" type="button" class="btn btn-dark ">CONSULTAR</a></div>
                <div class="col-md-3 col-sm-6 mt-1 "><a href="?action=insert" type="button" class="btn btn-dark ">INCLUIR</a></div>
                <div class="col-md-3 col-sm-6 mt-1 "><a href="?action=update" type="button" class="btn btn-dark ">ALTERAR</a></div>
                <div class="col-md-3 col-sm-6 mt-1 "><a href="?action=delete" type="button" class="btn btn-dark ">EXCLUIR</a></div>
            </div>
        </div>
    </div>
    <div class="container">

        <?php if ($_GET['action'] == 'select') : ?>
            <div class="d-flex justify-content-center align-self-center">
                <table class="table w-75">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">31</th>
                            <td>Administração</td>
                        </tr>
                        <tr>
                            <th scope="row">31</th>
                            <td>Recursos Humanos</td>
                        </tr>
                        <tr>
                            <th scope="row">31</th>
                            <td>Financeiro</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <?php endif; ?>
        <?php if ($_GET['action'] == 'insert') : ?>
            <div class="d-flex justify-content-center align-self-center ">
                <table class="table w-75">
                    <thead>
                        <tr>
                            <th scope="col w-25">Código</th>
                            <th scope="col w-75">Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="#" id="form" method="post">
                            <tr>
                                <th class="w-25">
                                    <input class="form-control w-25" type="text" placeholder="31" aria-label="31" value="31" disabled>
                                </th>
                                <td class="w-75">
                                    <input class="form-control w-75" type="text" placeholder="Departamento de manutenção">
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
                <br>
            </div>
            <div class="row justify-content-center">
                <button type="submit" id="submit" class="btn btn-dark w-25 ">Salvar</button>
            </div>
        <?php endif; ?>
        <?php if ($_GET['action'] == 'update') : ?>
            <div class="d-flex justify-content-center align-self-center ">
                <table class="table w-75">
                    <thead>
                        <tr>
                            <th scope="col w-25">Código</th>
                            <th scope="col w-75">Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="#" id="form" method="post">
                            <tr>
                                <th class="w-25">
                                    <input class="form-control w-25" type="text" placeholder="31" aria-label="31" value="31" disabled>
                                </th>
                                <td class="w-75">
                                    <input class="form-control w-75 description" type="text" placeholder="Departamento de manutenção" value="Administração" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th class="w-25">
                                    <input class="form-control w-25" type="text" placeholder="31" aria-label="31" value="31" disabled>
                                </th>
                                <td class="w-75">
                                    <input class="form-control w-75 description" type="text" placeholder="Departamento de manutenção" value="Recursos Humanos" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th class="w-25">
                                    <input class="form-control w-25" type="text" placeholder="31" aria-label="31" value="31" disabled>
                                </th>
                                <td class="w-75">
                                    <input class="form-control w-75 description" type="text" placeholder="Departamento de manutenção" value="Departamento de Manutenção" readonly>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
                <br>
            </div>
            <div class="row justify-content-center">
                <button type="submit" id="submit" class="btn btn-dark w-25 ">Salvar</button>
            </div>
        <?php endif; ?>
        <?php if ($_GET['action'] == 'delete') : ?>
            <div class="d-flex justify-content-center align-self-center ">
                <table class="table w-75">
                    <thead>
                        <tr>
                            <th scope="col w-25">Código</th>
                            <th scope="col w-75">Descrição</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th class="w-25">
                                <input class="form-control w-25" type="text" placeholder="31" aria-label="31" value="31" disabled>
                            </th>
                            <td class="w-75">
                                <input class="form-control w-75 description" type="text" placeholder="Departamento de manutenção" value="Administração" disabled>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-delete">
                                    EXCLUIR
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-25">
                                <input class="form-control w-25" type="text" placeholder="31" aria-label="31" value="31" disabled>
                            </th>
                            <td class="w-75">
                                <input class="form-control w-75 description" type="text" placeholder="Departamento de manutenção" value="Recursos Humanos" disabled>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-delete">
                                    EXCLUIR
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-25">
                                <input class="form-control w-25" type="text" placeholder="31" aria-label="31" value="31" disabled>
                            </th>
                            <td class="w-75">
                                <input class="form-control w-75 description" type="text" placeholder="Departamento de manutenção" value="Departamento de Manutenção" disabled>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-delete">
                                    EXCLUIR
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <br>
            </div>
        <?php endif; ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let btnSubmit = window.document.getElementById("submit");
        let form = window.document.getElementById("form");

        if (form != null && form != undefined) {
            btnSubmit.addEventListener('click', () => {
                form.submit();
            })
        }

        let descriptionDep = window.document.getElementsByClassName('description');
        if (descriptionDep) {
            Object.keys(descriptionDep).forEach((element) => {
                descriptionDep[element].addEventListener('click', () => {
                    descriptionDep[element].readOnly = false
                })
            })
        }

        let btnsDeletes = window.document.getElementsByClassName('btn-delete');
        console.log(btnsDeletes);
        Object.keys(btnsDeletes).forEach((element) => {
            btnsDeletes[element].addEventListener('click', () => {
                Swal.fire({
                    title: 'Cuidado !!!',
                    text: "Deseja Deletar este departamento ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Deletar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        })
    </script>
</body>

</html>