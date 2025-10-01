/**
 * @summary Loads content into a modal via AJAX.
 * @description Binds a click event to the anchor element with the ID 'paliativo'.
 * When this element is clicked, it asynchronously loads the content
 * from 'cursos.php' into the element with the ID 'portfolioModal2'.
 */
$('a#paliativo').on('click', function() {
    $('#portfolioModal2').load('cursos.php');
});