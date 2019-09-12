function retornaHtmlCrregarNoticia (imagem) {
    return `
    <div class="row mt-5">
    <div class="col-lg-6 mb-4">
        <img src="images/${imagem}.jpg" alt="imagem modelo para criação de uma chamada javascript dinâmica" class="w-100">
    </div>
    <div class="col-lg-6">
    <a href="noticia.php" role="button" aria-describedby="Botão para levar para a notícia">
        <div class="card-block px-2 d-flex flex-column text-hover-gray">
            <div class="btn-compartilhar">
            Compartilhar
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18" class="icon icon--share ">
            <path d="m 12.818311,11.294921 c 1.280064,0 2.333667,1.054406 2.333667,2.333668 0,1.279261 -1.054406,2.371411 -2.333667,2.371411 -1.279262,0 -2.333668,-1.09215 -2.333668,-2.371411 0,-0.187915 0,-0.377435 0.03774,-0.526802 L 4.8407964,9.789199 A 2.4252158,2.4252158 0 0 1 0.772537,8.020076 2.4252158,2.4252158 0 0 1 4.8383872,6.250954 L 10.48384,2.9761092 A 2.8974102,2.8974102 0 0 1 10.40915,2.4091547 C 10.40915,1.0921502 11.5013,0 12.818304,0 c 1.317008,0 2.409159,1.0921502 2.409159,2.4091547 0,1.3170047 -1.092151,2.4091553 -2.409155,2.4091553 -0.640032,0 -1.204577,-0.263401 -1.656695,-0.677776 L 5.5161598,7.453925 c 0.036941,0.187914 0.074684,0.377434 0.074684,0.564545 0,0.187111 -0.037744,0.377434 -0.075486,0.562137 l 5.7217422,3.31339 c 0.417587,-0.377434 0.979724,-0.602289 1.582012,-0.602289 z"></path>
            </svg>
            </div>
            <h4 class="card-title display-4 text-inherit">Lorem Ipsum Sit Amet.</h4>
            <p class="card-text ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, deserunt esse enim error excepturi, dignissimos quas pariatur voluptates facere, fugit[...]</p>
            <a href="#" class="text-inherit mt-auto pt-4">Ver mais</a>
        </div>
        </a>
    </div>
</div>`;
}
$('#btnCarregarMaisNoticias').on("click", function () {
    $('#carregar-mais-noticias').append(retornaHtmlCrregarNoticia('capitamarvel'));
    $('#carregar-mais-noticias').append(retornaHtmlCrregarNoticia('Dumbo'));
    $('#carregar-mais-noticias').append(retornaHtmlCrregarNoticia('homemaranha'));
});

var group = document.querySelector('.hamburguer-group');
var line = document.querySelector('.hamburguer-line');

group.addEventListener("click", function () {
   line.classList.toggle("animation1");
   line.classList.toggle("animation2");
   line.classList.toggle("animation3");
});

$(function() {
	setTimeout( () => {
		$('.preloader').addClass('after-preloader');
		$('.preloader-loader').remove();
	}, 300);
	setTimeout( () => {
		$('.preloader').remove();
	}, 600);
});