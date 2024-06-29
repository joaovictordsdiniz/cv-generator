$(document).ready(function () {
    // Cálculo automático da idade
    $('#dob').on('change', function () {
        const dob = new Date($(this).val());
        const ageDifMs = Date.now() - dob.getTime();
        const ageDate = new Date(ageDifMs); // miliseconds from epoch
        $('#age').val(Math.abs(ageDate.getUTCFullYear() - 1970));
    });

    // Adicionar novos campos de experiência
    $('#add-experience').click(function () {
        $('#experience-container').append('<div class="experience-entry"><input type="text" class="form-control mb-2" name="experience[]" placeholder="Empresa / Cargo"></div>');
    });
});