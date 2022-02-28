@props(['label','link'])
<?php
$active = $link == url()->current() ;
?>
<li class="menu-item{{ $active ?  ' active': '' }}">
    <a href="<?= $link ?>">{{ $label }}</a>
</li>
