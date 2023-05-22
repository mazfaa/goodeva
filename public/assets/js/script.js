$('#employee_table').dataTable({
  "scrollX": true
});

const coordinate = navigator.geolocation.watchPosition(position => {
  const {latitude, longitude} = position.coords;
  const coordinateForm = $('#coordinate-input');
  const coordinateFormUpdate = $('#coordinate-input-update');
  coordinateForm.val(`${latitude},${longitude}`);
  coordinateFormUpdate.val(`${latitude},${longitude}`);
});

const hour = new Date().getHours();
const clockInBtn = $('.clock-in-btn');
const clockOutBtn = $('.clock-out-btn');
const sendPhotoBtn = $('#send-photo-btn');

if (hour >= 6 && hour <= 9) {
  clockInBtn.removeClass('d-none');
  clockInBtn.addClass('d-block');
  clockOutBtn.removeClass('d-block');
  clockOutBtn.addClass('d-none');
} else {
  clockInBtn.removeClass('d-block');
  clockInBtn.addClass('d-none');
  clockOutBtn.removeClass('d-none');
  clockOutBtn.addClass('d-block');
}

sendPhotoBtn.on('click', function (e) {
  clockInBtn.removeClass('d-block');
  clockInBtn.addClass('d-none');
});

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

// let query_data = [
//   { value: "0", label: "ZERO" },
//   { value: "1", label: "ONE" },
//   { value: "2", label: "TWO" },
//   { value: "3", label: "THREE" },
//   { value: "4", label: "FOUR" }
// ];
// const placeOfBirthFormSelect = $('#placeOfBirthForm')[0];
// const placeOfBirthChoices = new Choices(placeOfBirthFormSelect, { allowHTML: true, shouldSort: false, choices: query_data });
// placeOfBirthChoices.passedElement.element.addEventListener('addItem', () => reset(), false);
//   placeOfBirthChoices.passedElement.element.addEventListener('removeItem', () => reset(), false);

//   function reset() {
//     placeOfBirthChoices.clearChoices();
//     placeOfBirthChoices.setChoices(query_data, "value", "label", false);
//   }

//   $(document).on('click', '.ajax_data', function() {
//     placeOfBirthChoices.removeActiveItems();
//     let data = '1,1,2,3,3';
//     let selected_values = data.split(',')
//     $.each(selected_values, function(key, value) {
//       placeOfBirthChoices.setChoiceByValue(value);
//       reset();
//     });
//   });
// // console.log(placeOfBirthChoices.passedElement.element)

// const genderFormSelect = $('#genderForm')[0];
// const genderChoices = new Choices(genderFormSelect, { allowHTML: true, shouldSort: false });

// document.addEventListener("DOMContentLoaded", function() {
//   genderChoices.passedElement.element.addEventListener('addItem', function(e) {
//     genderChoices.setChoices([{
//       value: e.detail.value,
//       label: e.detail.label
//     }, ], 'value', 'label', false, );
//   }, false, );

//   $(document).on('click', '.ajax_data', function() {
//     let data = 'Male,Female';
//     genderChoices.removeActiveItems();
//     genderChoices.setChoiceByValue(data.split(','));
//     console.log('Ajax data loaded');
//   });
// });

// const maritalStatusFormSelect = $('#maritalStatusForm')[0];
// const maritalStatusChoices = new Choices(maritalStatusFormSelect, { allowHTML: true, shouldSort: false });

// const religionFormSelect = $('#religionForm')[0];
// const religionChoices = new Choices(religionFormSelect, { allowHTML: true, shouldSort: false });

// const cityFormSelect = $('#cityForm')[0];
// const cityChoices = new Choices(cityFormSelect, { allowHTML: true, shouldSort: false });

// const provinceFormSelect = $('#provinceForm')[0];
// const provinceChoices = new Choices(provinceFormSelect, { allowHTML: true, shouldSort: false });

// const employmentStatusFormSelect = $('#employmentStatusForm')[0];
// const employmentStatusChoices = new Choices(employmentStatusFormSelect, { allowHTML: true, shouldSort: false });

// const managerFormSelect = $('#managerForm')[0];
// const managerChoices = new Choices(managerFormSelect, { allowHTML: true, shouldSort: false });

// const branchFormSelect = $('#branchForm')[0];
// const branchChoices = new Choices(branchFormSelect, { allowHTML: true, shouldSort: false });

// const divisionFormSelect = $('#divisionForm')[0];
// const divisionChoices = new Choices(divisionFormSelect, { allowHTML: true, shouldSort: false });

// const professionFormSelect = $('#professionForm')[0];
// const professionChoices = new Choices(professionFormSelect, { allowHTML: true, shouldSort: false });

// const jobLevelFormSelect = $('#jobLevelForm')[0];
// const jobLevelChoices = new Choices(jobLevelFormSelect, { allowHTML: true, shouldSort: false });

const endDateForm = $('#endDateForm');
const employmentStatusFormSelected = $('#employmentStatusForm');

employmentStatusFormSelected.change(function () {
  if ($(this).val() != 'Permanent') {
    endDateForm.removeAttr('disabled');
    endDateForm.attr('type', 'date');
    endDateForm.val(new Date().toISOString().split('T')[0]);
  }
  else {
    endDateForm.attr('disabled', '');
    endDateForm.attr('type', 'text');
    endDateForm.val('No end date');
  }
});