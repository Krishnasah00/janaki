// $(document).ready(function() {
//     // Store the last focused element before opening the modal
//     let lastFocusedElement;

//     $(document).on('shown.bs.modal', '.modal', function() {
//         $(this).data('bs.modal')._config.backdrop = 'static';
//         $(this).data('bs.modal')._config.keyboard = false;
//     });

//     // Allow closing only when clicking "Close" button or "X" button
//     $(document).on('click', '.modal .close, .modal .close-modal', function() {
//         let modal = $(this).closest('.modal');

//         // Move focus back to the last focused element before closing the modal
//         modal.on('hidden.bs.modal', function() {
//             if (lastFocusedElement) {
//                 $(lastFocusedElement).trigger('focus');
//             }
//         });

//         modal.modal('hide');
//     });
// });
