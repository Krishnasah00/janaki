 <style>
     .editTodoMessage,
     .deleteTodoMessage {
         display: none !important;
     }

     .editTodoMessage {
         margin-right: 30px !important;
     }

     /* Show icons when hovering over the whole li */
     #todo_list li:hover .editTodoMessage,
     #todo_list li:hover .deleteTodoMessage {
         display: inline-block !important;
     }

     /* Optional: keep spacing and alignment clean */
     #todo_list li label {
         display: flex;
         justify-content: space-between;
         align-items: center;
         width: 100%;
     }

     #todo_list li span {
         flex-grow: 1;
         margin-left: 35px;
     }
 </style>

 @forelse ($todoMessage as $msg)
     <li>
         <label>
             <input type="checkbox" class="messageCheckBox" data-id="{{ $msg->id }}"
                 {{ $msg->status == 'N' ? 'checked' : '' }}>
             <i></i>
             <span>{{ !empty($msg->message) ? $msg->message : '' }}</span>
             <a href="javascript:void(0)" data-id="{{ $msg->id }}" data-message="{{ $msg->message }}"
                 class="fa fa-solid fa-pen-to-square text-primary editTodoMessage">
             </a>
             <a href="javascript:void(0)" data-id="{{ $msg->id }}" class="fa fa-trash text-danger deleteTodoMessage">
             </a>
         </label>
     </li>
 @empty
     <li>
         <label>
             <span>No Data</span>
         </label>
     </li>
 @endforelse
