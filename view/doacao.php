<div class="body-bg">
        <header class="header">
            <a class="logo" href="<?=constant('URL_LOCAL_SITE_PAGINA').'principal'?>">InfoSports</a>
            <div class="headerBtnGroup">
            <?php include_once("menuTopo.php");?>
                <div>
                    <input type="checkbox" class="check" id="chk" />
                
                    <label class="label" for="chk">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <div class="bola"></div>
                    </label>
                </div>
            </div>
            <div class="hamburguer-menu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </header>
        <div class="container-body">
            <div class="container">
                <div class="title">
                    <h2>Faça sua Doação</h2>
                </div>
                
                <form method="POST" action="#" enctype="multipart/form-data">
                    <div class="campos">
                        <div class="input-box">
                            <div class="name">
                                <label for="titulo">ChavePix</label>
                                <!-- <input type="text" placeholder="ChavePix" id="titulo" name="titulo" > -->
                                <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="name">
                                <label for="titulo">81981122982</label>
                                <!-- <input type="text" placeholder="81981122982" id="titulo" name="titulo" > -->
                                <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
                            </div>
                        </div>
                        <!-- <label for="titulo" id="titulo">Envie seu Comprovante</label> -->
                        <!-- <input type="text" placeholder="Envie seu Comprovante" id="titulo" name="titulo" > -->
                        <div class="input-box">
                        <label for="titulo" id="titulo">Envie seu Comprovante</label>    
                        <input type="file" placeholder="Envie seu Comprovante" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="input-box">
                            <textarea id="mensagem" name="mensagem" placeholder="Envie uma Mensagem de Apoio"></textarea>
                        </div>
                    </div>

                    <div class="button">
                        <button value="Enviar" class="btn-concluir" id="btnEnviar">Enviar</button>
                    </div>
                </form>
            </div>
           
        </div>

        <footer class="footer">
            <span>Info Sports</span>
            <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
        </footer>
    </div>