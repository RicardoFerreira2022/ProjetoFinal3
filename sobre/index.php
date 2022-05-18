<?php

/**
 * Arquivo que faz a configuração incial da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

/**
 * Variável que define o título desta página.
 * Essa variável é usada no arquivo "_header.php".
 * OBS: para a página inicial (index.php) usaremos o 'slogan' do site.
 *     Referências:
 *     → https://www.w3schools.com/php/php_variables.asp
 *     → https://www.php.net/manual/pt_BR/language.variables.basics.php
 */
$title = "Sobre";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>

<h1>Sobre:</h1>

<h3>Sobre o Site</h3>
<p>O Eclipse é um site com o intuito de falar sobre  fenômenos naturais que ocorrem no universo.</p>


<h3>Sobre Nós</h3>
<p>Somos alunos do curso TI, com previssão de término em abril de 2023. O Eclipse é um site com o intuito de falar sobre  fenômenos naturais que ocorrem no universo e têm como desenvolvedores Iago Sales, Ricardo Ferreira e Lucas Faislon.</p>

<h3>Políticas de Privacidade</h3>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

</section>

<aside>

<?php

// Obtém os artigos mais visitados para a variável $mv.
$mv = mostViewed();

// Se existem artigos mais visitados, exibe eles...
if ($mv) echo "<h3>Mais visitados</h3>{$mv}";
?>

</aside>



<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');