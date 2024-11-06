// // var frmInfo = $('#frmFifthStep');
// // var frmInfoValidator = frmInfo.validate();

// // var frmLogin = $('#frmLogin');
// // var frmLoginValidator = frmLogin.validate();

// var frmFirstStep = $('#frmFirstStep');
// var frmFirstStepValidator = frmFirstStep.validate();

// var frmSecondStep = $('#frmSecondStep');
// var frmSecondStepValidator = frmSecondStep.validate();

// var frmThirdStep = $('#frmThirdStep');
// var frmThirdStepValidator = frmThirdStep.validate();

// var frmFourthStep = $('#frmFourthStep');
// var frmFourthStepValidator = frmFourthStep.validate();

// var frmFifthStep = $('#frmFifthStep');
// var frmFifthStepValidator = frmFifthStep.validate();

// var frmSixthStep = $('#frmSixthStep');
// var frmSixthStepValidator = frmSixthStep.validate();

// var frmSixthStep = $('#frmSeventhStep');
// var frmSixthStepValidator = frmSixthStep.validate();


// $('.step-app').steps({
//   onChange: function (currentIndex, newIndex, stepDirection) {
//     // step2
//     if (currentIndex === 1) {
//       if (stepDirection === 'forward') {
//         return frmFirstStep.valid();
//       }
//       if (stepDirection === 'backward') {
//         frmFirstStepValidator.resetForm();
//       }
//     }
//     // step3
//     if (currentIndex === 2) {
//       if (stepDirection === 'forward') {
//         return frmSecondStep.valid();
//       }
//       if (stepDirection === 'backward') {
//         frmSecondStepValidator.resetForm();
//       }
//     }
//     // step4
//     if (currentIndex === 3) {
//       if (stepDirection === 'forward') {
//         return frmThirdStep.valid();
//       }
//       if (stepDirection === 'backward') {
//         frmThirdStepValidator.resetForm();
//       }
//     }
//     // step5
//     if (currentIndex === 4) {
//       if (stepDirection === 'forward') {
//         return frmFourthStep.valid();
//       }
//       if (stepDirection === 'backward') {
//         frmFourthStepValidator.resetForm();
//       }
//     }
//     // step6
//     if (currentIndex === 5) {
//       if (stepDirection === 'forward') {
//         return frmFifthStep.valid();
//       }
//       if (stepDirection === 'backward') {
//         frmFifthStepValidator.resetForm();
//       }
//     }
//     // step7
//     if (currentIndex === 6) {
//       if (stepDirection === 'forward') {
//         return frmSixthStep.valid();
//       }
//       if (stepDirection === 'backward') {
//         frmSixthStepValidator.resetForm();
//       }
//     }
//     // step8
//     if (currentIndex === 7) {
//       if (stepDirection === 'forward') {
//         return frmSeventhStep.valid();
//       }
//       if (stepDirection === 'backward') {
//         frmSixthStepValidator.resetForm();
//       }
//     }

//     return true;
//   },
//   onFinish: function () {
//     // $('.register-steps').hide(10);
//     // $('.register-steps__actions').hide(15);
//     // $('.steps-summary').show(20);
//   }
// });
// $( document ).ready(function() {
//   $('.steps-summary-back').click(function(){
//     $('.steps-summary').hide(20);
//     $('.register-steps').show(30);
//     $('.register-steps__actions').show(30);
//   });
// });


$(document).ready(function () {
      // Initialize validators
      var frmFirstStep = $('#frmFirstStep');
      var frmFirstStepValidator = frmFirstStep.validate();

      var frmSecondStep = $('#frmSecondStep');
      var frmSecondStepValidator = frmSecondStep.validate();

      var frmThirdStep = $('#frmThirdStep');
      var frmThirdStepValidator = frmThirdStep.validate();

      var frmFourthStep = $('#frmFourthStep');
      var frmFourthStepValidator = frmFourthStep.validate();

      var frmFifthStep = $('#frmFifthStep');
      var frmFifthStepValidator = frmFifthStep.validate();

      var frmSixthStep = $('#frmSixthStep');
      var frmSixthStepValidator = frmSixthStep.validate();

      var frmSeventhStep = $('#frmSeventhStep');
      var frmSeventhStepValidator = frmSeventhStep.validate();

      // Initialize stepper with validation
      $('.step-app').steps({
        onChange: function (currentIndex, newIndex, stepDirection) {
          // Define validators for each step
          var stepValidators = [
            frmFirstStepValidator,
            frmSecondStepValidator,
            frmThirdStepValidator,
            frmFourthStepValidator,
            frmFifthStepValidator,
            frmSixthStepValidator,
            frmSeventhStepValidator
          ];

          // If moving forward, validate the current step
          if (stepDirection === 'forward') {
            return stepValidators[currentIndex].valid();
          }

          // If moving backward, reset the validator for the previous step
          if (stepDirection === 'backward') {
            stepValidators[newIndex].resetForm();
          }

          return true;
        },
        onFinish: function () {
          // Add your finish logic here
          alert('Form submitted successfully!');
        }
      });
    });
