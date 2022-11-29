<?php
class Usuario
{
    function Logar()
    {
        include 'bd/conexao.php';
        $sql = 'SELECT * FROM usuarios';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['email'] == $_POST['email'] && $row['senha'] == $_POST['senha']) {
                    // este echo é um alerta que avisa que o usuário está logado ou não
                    echo '<div class="container">
                    <div class="row">
                        <div class="col col-sm-4 offset-4 g-5">
                            <div class="alert alert-success" role="alert">
                                Usuário Logado!
                            </div>
                        </div>
                    </div>
                </div>';
                // este return sinaliza que depois de encontrado o usuário na tabela sql o programada deve se parado.
                    return;
                } else {
                    // este echo é um alerta que avisa que o usuário está logado ou não.
                    echo '<div class="container">
                    <div class="row">
                        <div class="col col-sm-4 offset-4 g-5">
                            <div class="alert alert-danger" role="alert">
                                Usuário não está Logado!
                            </div>
                        </div>
                    </div>
                </div>';
                    return;
                }
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
}
?>
