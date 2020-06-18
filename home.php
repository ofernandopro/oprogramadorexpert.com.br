<section class="banner-principal">
    <div class="center">

            <div class="w40 left img-ebook">
                <img src="images/img-ebook.png" width="130px;">
            </div>

            <div class="w60 left texto-ebook">
                <h3><b>[GRÁTIS]</b> Ebook - Como se tornar um programador do zero ao expert!</h3>
                <p>Receba o ebook gratuitamente em seu email!</p>
            </div>

            <div class="clear"></div>

            <form method="post">
                <?php
                    if(isset($_POST['acao'])){
                        $lead = $_POST['lead'];
                        Painel::insertLead($lead);
                        //Painel::redirect(INCLUDE_PATH.'agradecimento');
                    }
                ?>
                <input type="email" name="lead" placeholder="Digite seu email aqui..." required />
                <input type="submit" name="acao" value="Receber meu ebook">
                <p>Não enviamos spam. Seu e-mail está 100% seguro.</p>
            </form>

            <div class="clear"></div>

    </div>
</section>

<!--<hr />-->

<section class="apresentacao">
    <div class="center">
        <div class="w60 left texto-apresentacao">
            <h1>Comunidade O Programador Expert<b>.</b></h1>
            <p>Faça parte da melhor comunidade de programadores do Brasil! Acompanhe o nosso blog, confira nossos cursos gratuitos e nos siga nas redes sociais. Veja mais abaixo!</p>
        </div>
        <div class="w40 right img-apresentacao">
            <img src="images/coding.png" width="80%" />
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="devmarket">
    <div class="center">
        <div class="w40 left img-devmarket">
            <img src="images/devmarket.png" width="80%" />
        </div>
        <div class="w60 right texto-devmarket">
            <h1>DevMarket<b>.</b></h1>
            <p>Compre cursos de programação pela DevMarket e receba bônus incríveis exclusivos!</p>
            <a href="https://devmarket.oprogramadorexpert.com.br"><button>Visitar</button></a>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="starcoders">
    <div class="center">
        <div class="w60 left texto-starcoders">
            <h1>CODE CAMP__</h1>
            <p>Aprenda Programação do Zero ao avançado com nosso curso totalmente GRATUITO. Em breve irá ao ar!<br><b>Em breve!</b></p>
            <!--<button>Receber</button>-->
        </div>
        <div class="w40 right img-starcoders">
            <img src="images/spaceship.png" width="70%" />
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="blog">
    <div class="center">
        <div class="w40 left img-blog">
            <img src="images/blog.png" width="60%" />
        </div>
        <div class="w60 right texto-blog">
            <h1>Conteúdo Pesadíssimo em nosso blog<b> !</b></h1>
            <p>Essa é só para aqueles que querem levar sua carreira ao próximo nível. Acesse o nosso Blog e tenha acesso às melhores notícias do mercado de TI, insights sobre produtividade, inglês, como começar em programação, entre muitos outros!</p>
            <a href="<?php echo INCLUDE_PATH_BLOG; ?>"><button>Acessar</button></a>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="livro-ecti">
    <div class="center">
        <div class="w60 left texto-livro-ecti">
            <h1>Livro Escolha sua Faculdade em TI</h1>
            <p>Com este livro você vai descobrir se a área de TI é realmente para você, qual a faculdade mais recomendada e qual o salário de um profissional de TI. Tudo para que você não perca anos de sua vida em um curso que não seria a melhor opção para você e para que tenha a vida profissional dos sonhos.</p>
            <a href="<?php echo INCLUDE_PATH_LIVRO; ?>"><button>Saiba Mais</button></a>
        </div>
        <div class="w40 right img-livro-ecti">
            <img src="images/livro-ecti.png" width="60%" />
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="banner-principal">
    <div class="center">

        <div class="w40 left img-ebook">
                <img src="images/img-ebook.png" width="150px;">
            </div>

            <div class="w60 left texto-ebook">
                <h3><b>[GRÁTIS]</b> Ebook - Como se tornar um programador do zero ao expert!</h3>
                <p>Receba o ebook gratuitamente em seu email!</p>
            </div>

            <div class="clear"></div>

            <form method="post">
                <input type="email" name="lead" placeholder="Digite seu email aqui..." required />
                <input type="submit" name="acao" value="Receber meu ebook">
                <p>Não enviamos spam. Seu e-mail está 100% seguro.</p>
            </form>

            <div class="clear"></div>

    </div>
</section>