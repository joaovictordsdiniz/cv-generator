$(document).ready(function () {
    $('#dob').on('change', function () {
        const dob = new Date($(this).val());
        const ageDifMs = Date.now() - dob.getTime();
        const ageDate = new Date(ageDifMs);
        $('#age').val(Math.abs(ageDate.getUTCFullYear() - 1970));
    });

    $('#add-experience').click(function () {
        $('#experience-container').append('<div class="experience-entry"><input type="text" class="form-control mb-2" name="experience[]" placeholder="Empresa / Cargo"></div>');
    });

    $('#add-reference').click(function () {
        $('#references-container').append('<div class="reference-entry"><input type="text" class="form-control mb-2" name="references[]" placeholder="Nome / Contato"></div>');
    });

    $('#add-education').click(function () {
        $('#education-container').append('<div class="education-entry"><input type="text" class="form-control mb-2" name="education[]" placeholder="Curso / Instituição"></div>');
    });
});