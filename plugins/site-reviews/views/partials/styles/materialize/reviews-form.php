<?php defined('WPINC') || die; ?>

<div class="glsr-form-wrap">
    <form class="{{ class }}" id="{{ id }}" method="post" enctype="multipart/form-data">
        {{ fields }}
        {{ submit_button }}
        {{ response }}
    </form>
</div>
