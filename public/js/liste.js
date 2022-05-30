 $(document).ready(function () {

    $('#saveCreateList').click(function(){
        var nom = $('#createList').val();

        if(nom !== '') {
            $.ajax({
                url: '/liste',
                type: 'POST',
                data: {nom: nom},
                success: function(data){
                    location.reload();
                }
            });
        }
    });

     $('#create_task').click(function (e) {
         var nom = $('#task_name').val();
         var priority = $('#task_priority').val();
         var liste = $('#task_list').find(":selected").val();
         if (nom !== '') {
             $.ajax({
                 url: '/task',
                 type: "POST",
                 data: {nom: nom, priority: priority, liste: liste},
                 success: function (data)  {
                     location.reload();
                 }
             })
         }
     });

     $('.supprimerliste').click(function (e) {
         let listId = $(this).attr('data-listId')
         if (listId !== '') {
             $.ajax({
                 url: '/liste',
                 type: "DELETE",
                 data: {listId: listId},
                 success: function (data) {
                     $(location).attr('href', '/dashboard');


                 }
             })
         }
     });

     $('.supprimertache').click(function (e) {
         e.preventDefault()
         let tacheId = $(this).attr('data-tacheId')
         if (tacheId !== '') {
             $.ajax({
                 url: '/task',
                 type: "DELETE",
                 data: {tacheId: tacheId},
                 success: function (data) {
                     $(`#li-${tacheId}`).remove()
                 }
             })
         }
     });

     $('.toggletache').click(function (e) {
         e.preventDefault()
         let tacheId = $(this).attr('data-tacheId')
         if (tacheId !== '') {
             $.ajax({
                 url: '/task/toggle',
                 type: "POST",
                 data: {tacheId: tacheId},
                 success: function (data) {
                     location.reload();
                 }
             })
         }
     });

 })

