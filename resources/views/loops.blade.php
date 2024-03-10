@for($i = 1; $i <= 10; $i++)
    <p>{{ $i }}. This is a loop</p>
@endfor

<?php

    $names = ['John', 'Doe', 'Jane', 'Doe'];

?>

@foreach($names as $name)
    <p>{{ $name }}</p>
@endforeach

<?php foreach($names as $name):?>
    <p><?= $name ?></p>
<?php endforeach;?>