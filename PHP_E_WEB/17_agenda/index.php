<?php 
    include_once("templates/header.php");
?>
    <div class="container">
    <p id="msg">TESTANDO MENSAGEM </p>

        <?php if(isset($printMsg) && $printMsg !=''): ?>
            <p id="msg"><?= $printMsg ?> </p>
        <?php endif; ?>

        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts ) > 0 ): ?>


            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone </th>
                        <th scope="col">#</th>

                    </tr>
                </thead>

                <tbody>
                    <?php foreach($contacts as $contacts): ?>
                        <tr>
                            <td scope="row" class="col-id"> <?= $contacts['id'] ?>  </td>
                            <td scope="row"> <?= $contacts['name'] ?>  </td>
                            <td scope="row"> <?= $contacts['phone'] ?>  </td>
                            <td class="actions">
                                <a href="#"> <i class="fas fa-eye check-icon"> </i> </a>
                                <a href="#"> <i class="far fa-edit edit-icon"> </i> </a>
                                <button type="submit" class="delete-btn"> <i class="fas fa-times delete-icon"> </i></button>

                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>   

        <?php else: ?>
            <p id="empty-list-text"> Ainda não Há contatos na sua agenda,
                <a href="create.php">Clique aqui para adicionar.</a>
            </p>
        <?php endif; ?>

    </div>


<?php 
    include_once("templates/footer.php");

?>