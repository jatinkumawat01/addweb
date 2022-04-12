<?php
class foo {
     function foofoo()
    {
        echo "hello foofoo";
    }
}
class bar extends foo {
    function barbar()
    {
        parent::foofoo();
    }
}
$b = new bar;
$b->barbar();
?>
