<form action="gonder.php" metod="post" enctype="multipart/form-data">
<!--
    input
    textarea
    file 
    radio
    checkbox
    select
    multiple select
    button
-->
Ad: <br>
<input type="text" name="">
<hr>
Hakkimda: <br>
<textarea name="hakkimda" cols="50" rows="5"></textarea>
<hr>
Meslek: <br>
<select name="meslek" id="">
    <option>-- sec --</option>
    <option value="web-developer">Web Developer</option>
    <option value="front-end-developer">Front-end Developer</option>
    <option value="back-end-developer">Back-end Developer</option>
    <option value="mobile developer">Mobile Developer</option>
</select>
<hr>
Cinsiyet: <br>
<label>
<input type="radio" name="cinsiyet" value="erkek">
erkek
</label>
<label>
<input type="radio" name="cinsiyet" value="kadin">
kadin
</label>
<hr>
ilgi Alanlari: <br>
<label>
<input type="checkbox" name="ilgi_alani" value="php"> PHP
</label>
<label>
<input type="checkbox" name="ilgi_alani" value="html"> HTML
</label>
<label>
<input type="checkbox" name="ilgi_alani" value="css"> CSS
</label>
<hr>
Fotograf: <br>
<input type="file" name="fotograf">
<hr>
Meslek: <br>
<select name="meslek2[]" id="">
    <option>-- sec --</option>
    <option value="web-developer">Web Developer</option>
    <option value="front-end-developer">Front-end Developer</option>
    <option value="back-end-developer">Back-end Developer</option>
    <option value="mobile developer">Mobile Developer</option>
</select>
<hr>
<button type="submit">Gonder</button>
</form>