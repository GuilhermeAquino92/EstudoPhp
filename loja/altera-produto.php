<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");?>

                <?php
                        
                $id = $_POST['id'];
                $nome = $_POST ['nome'];
                $preco = $_POST['preco'];
                $descricao= $_POST['descricao'];
                $categoria_id= $_POST['categoria_id'];
                if(array_key_exists('usado', $_POST)){
                    $usado="true";    
                }else{
                    $usado="false";
                }
                
             

                if (alteraProduto($conexao,$nome, $preco,$descricao,$categoria_id,$usado)) { ?>
                <p class="text-success">Produto <?php echo $nome; ?>, <?php echo $preco; ?> alterado com sucesso!</p>    
                <?php } else {
                    $msg = mysqli_error($conexao);
                ?>
                <p class="text-danger">Produto <?php echo $nome; ?>, não foi  alterado: <?= $msg ?></p>     
                <?php
           
                }

                mysqli_close($conexao);

                ?>

               

<?php include("rodape.php")?>