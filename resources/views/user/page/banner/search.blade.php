<form class="search-box" action="" method="post">
    <i class="fa fa-search" aria-hidden="true"></i>
    <div class="input-box">
        <input type="text" name="query" <?php if(isset($error)) { ?> placeholder="<?php echo $error ?>" <?php }else { ?>placeholder="Fait votre recherche ici"<?php }?>>
        <button type="submit" name="recherche">
            <i class="fa fa-searc"  aria-hidden="true" ></i>
        </button>
    </div>
</form>