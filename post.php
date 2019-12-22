<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<select class="mySelect">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select>

<form>
    <fieldset id="group1">
        <input type="radio" value="value1" name="group1" id="1-1">
        <input type="radio" value="value2" name="group1" id="1-2">
        <input type="radio" value="value3" name="group1" id="1-3">
    </fieldset>

    <fieldset id="group2">
        <input type="radio" value="value1" name="group2" id="2-1">
        <input type="radio" value="value2" name="group2" id="2-2">
        <input type="radio" value="value3" name="group2" id="2-3">
    </fieldset>
</form>

<?php
//index php sayfasındaki option değerini post ettik.
if (isset($_POST['submit'])) {
    $getnumber = $_POST['number_values'];
}
?>

<script>
    //post ettiğimiz veriyi script içerisinde değişkene atadık.
    var secilen = "<?php echo $getnumber; ?>";
    
    //secimleri tanımladık.
    var secim = ["1-1", "1-2", "1-3", "2-1", "2-2", "2-3"];
    
    //option seçim fonksiyonu
    $(function() {
        $('.mySelect option[value="' + secilen + '"]').prop('selected', true);

        document.getElementById(secim[secilen - 1]).checked = true;
        document.getElementById(secim[(secilen - 1) + 3]).checked = true;
    });
</script>