<?php include("Includes/Header.php");?>
    <div class="Content">
        <?php
            include ("ClassConexao.php");
            include ("ClassCrud.php");
        ?>
        <div class="Resultado"></div>
        
        <div class="Formulario">
            <h1 class="Center">Cadastro</h1>

        <form action="Controllers/ControllerCadastro.php" name="FormCadastro" id="FormCadastro" method="post">
            
            <div class="FormularioInput">
                Nome: <br>
                <input type="text" id="Nome" name = "Nome">
                Sexo:
                <input type="text" id="Sexo" name = "Sexo">
                Cidade:
                <input type="text" id="Cidade" name = "Cidade">
            </div>
            <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
        </div>
    </div>
<?php include("Includes/Footer.php");?>
