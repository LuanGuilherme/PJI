


<div class="lBar">
    <div class="row m-auto btn-color">
        <form action="PHP/formController.php" method="post">
            <input type="hidden" name="page" value="<?= $page ?>">  
            <input type="hidden" name="boolContraste" value="<?=$boolContraste == "false" ? "true" : "false" ;?>">
            <button class="btn <?=$boolContraste == "true" ? "btn-outline-light" : "btn-outline-dark" ;?> col-md-10" type="submit" tabindex="7">
                <p id="contraste">Ativar Contraste</p>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-brightness-alt-low-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.5 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5 6a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-8.486 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z"/>
                    <path fill-rule="evenodd" d="M4 11a4 4 0 1 1 8 0 .5.5 0 0 1-.5.5h-7A.5.5 0 0 1 4 11z"/>
                </svg>
            </button>
        </form>
    </div>
    <div class="row m-auto btn-color">
        <button class="btn <?=$boolContraste == "true" ? "btn-outline-light" : "btn-outline-dark" ;?> col-md-10" type="button" onclick="expandeLink();" tabindex="8">
            <p id="comprime_link">Comprimir Links</p>
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-link" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
            </svg>
        </button>
    </div>
</div>