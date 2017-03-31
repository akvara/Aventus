<?php
$lorem = <<<LOREM
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique, nunc eget porta porttitor, urna tellus mattis ante, non sodales ex arcu a ipsum. Nam nec mauris lectus. Cras vitae turpis velit. Nulla in rutrum metus. Proin a congue ante, at elementum lorem. Suspendisse euismod mattis nisi, sit amet rutrum augue semper id. Nam blandit auctor sem, id tincidunt magna finibus eget. Cras id euismod lacus. Praesent nulla turpis, lacinia in dignissim non, fringilla eu magna. Vivamus convallis, leo ac tincidunt consectetur, nulla ex mollis est, condimentum venenatis leo ligula sit amet ante. Fusce auctor vel ipsum at feugiat. Aenean in vulputate dui, sit amet viverra sapien.
Fusce hendrerit lacus sed pretium blandit. Proin a porttitor elit, in ultricies risus. Integer eleifend eros vitae nulla vestibulum mollis. Fusce fermentum, neque sit amet eleifend tincidunt, diam lacus luctus neque, vel faucibus est dolor vel tortor. Etiam vel lectus odio. Nam tortor arcu, pulvinar non fermentum sed, vehicula non leo. Sed pellentesque ipsum lorem, eu lacinia dui scelerisque nec. Nullam luctus vel elit a facilisis. Fusce vehicula ligula enim, in lacinia odio posuere in. Integer sed efficitur sem, eu facilisis nisi. Etiam non imperdiet velit. Ut pulvinar rhoncus dolor vitae auctor. Donec tempus, nunc in dignissim aliquet, magna eros tempus augue, in ornare lorem lorem eu tellus. Nulla accumsan et massa eu dignissim. Phasellus sit amet tincidunt lectus. Quisque imperdiet, tortor ac posuere cursus, felis mauris maximus eros, ac tincidunt justo arcu a dui.
Aliquam molestie posuere interdum. Donec sodales, nibh id auctor convallis, tellus diam gravida velit, vel venenatis velit purus et dolor. Phasellus tempus nibh quis nulla mollis commodo. Nulla porta dapibus ex vitae varius. Donec tempus gravida ex, porta hendrerit tellus. Maecenas varius semper rutrum. Morbi vitae eleifend mi.
Sed pellentesque ante at aliquet interdum. In ullamcorper porta velit, non ultrices turpis laoreet eu. Fusce ut tellus dignissim, consequat justo at, suscipit ligula. Cras quis neque vitae lorem tempor eleifend vel eget massa. Etiam hendrerit metus lorem. Etiam eu magna rutrum, accumsan nulla vel, dignissim quam. Etiam aliquam augue mauris, ac faucibus ex euismod at. Aliquam turpis eros, luctus sed neque in, convallis sollicitudin velit.
Mauris tristique quam eget lobortis facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium porttitor ullamcorper. Proin sodales efficitur ultricies. Proin tellus diam, venenatis ac tristique eu, vestibulum vel elit. Nam lectus velit, tincidunt non sollicitudin sit amet, feugiat sed nisi. Maecenas pellentesque ligula iaculis, egestas nulla ac, fermentum lorem. Cras eget dui sed ligula aliquam vehicula. Sed ullamcorper, ipsum in interdum scelerisque, ex leo ultrices orci, eget imperdiet nulla augue et lorem. Curabitur nec lacus nunc. Ut porttitor enim in mi mollis imperdiet.
Duis ac libero lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ipsum massa, porta at enim eget, ornare suscipit felis. Vivamus id risus vitae enim convallis viverra sit amet vel orci. Curabitur rhoncus nisi iaculis dui aliquam, quis malesuada nunc rhoncus. Aenean est quam, suscipit et nisi ac, tempus sodales velit. Aenean aliquam dignissim.
LOREM;

function get_word() {
    global $lorem;

    preg_match_all('|([A-Za-z]+)|', $lorem, $words);

    $index = rand(0, sizeof($words[1])-1);

    return ucfirst($words[0][$index]);
}

function get_sentence() {
    global $lorem;

    preg_match_all('|([ ,A-Za-z]+\.)|', $lorem, $sentences);

    $index = rand(0, sizeof($sentences[1])-1);

    return $sentences[0][$index];
}
print strlen('Donec sodales, nibh id auctor convallis, tellus diam gravida velit, vel venenatis');