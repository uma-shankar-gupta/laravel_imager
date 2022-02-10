<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            /* ! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.csshtml{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}} */
        </style>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            .image-overlay{
                width: 100%;
                height: 147px;
                position: relative;
            }
            .image-overlay img{
                width: 100%;
                height: 100%;
                cursor : pointer;
            }
            .image-overlay .img-check{
                position: absolute;
                bottom : 10px;
                right : 10px;
                transform : scale(1.5);
                cursor : pointer;
            }
            .image-overlay .delete-img{
                position: absolute;
                top : 10px;
                right : 10px;
                transform : scale(1.5);
                cursor : pointer;
            }
            .filename{
                position: absolute;
                width: 140px;
                top : -20px;
                left : 10px;
                color : gray !important;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
        </style>
    </head>
    <body class="">
    <div class="container-fluid bg-light pt-5">
        <div class="row"  id="image_box">
            @foreach ($images as $img)
            <div class="col-md-2 mb-1">
                <div class="image-overlay" data-id="{{$img->delete_id}}">
                    <span class="filename">{{$img->file_name}}</span>
                    <img src="/storage/images/{{$img->delete_id}}">
                    <input type="checkbox" class="img-check">
                    <span class="text-danger delete-img"><i class="fa fa-times"></i></span>
                </div>
            </div>
            @endforeach
            <div class="col-md-2 mb-1">
                <div class="upload-box card">
                            <div class="card-body text-center py-5">
                                <span><i class="fa fa-plus-circle text-success h1"></i></span>
                            </div>
                            
                </div>
                <input type="file" class="file_upload_input" accept="image/*" id="upload_image" style="display:none" multiple>
                <input type="file" class="file_upload_input" accept="image/*" id="upload_image2" style="display:none">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-danger" id="delete_all">Delete</button>
            </div>
        </div>
    </div>
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <script src="{{asset('js/app.js')}}"></script>
        <script>
        var max_image_count = 10;
            $('.upload-box').click(function(e){
                $('#upload_image').trigger('click');
                
            });
            $('#upload_image').change(function(){
                var allowedExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp']
                var formdata = new FormData();
                var existing_image_count = $('.image-overlay').length;
                var valid_file = true;
                var file_numbers = $(this)[0].files.length;
                if(file_numbers>0){

                    if(file_numbers <=  (max_image_count- existing_image_count)){
                        for(var file of $(this)[0].files){
                            if(file.size>(10*1000000)){
                                alert('More than 10 MB size not allowed')
                                valid_file =  false;
                            }else if(!allowedExtension.includes(file.type.replace('image/',''))){
                                alert('Not valid file')
                                valid_file =  false;
                            }else{
                                console.log(file)
                                formdata.append('file[]',file);
                            }
                        }
                    }else{
                        alert('only '+(max_image_count- existing_image_count)+' files allowed more');
                        return;
                    }

                    if(!valid_file){
                        return;
                    }
                }else{
                    alert('No image selected');
                    return;
                }

                // console.log(formdata)
                $.ajax({
                    url: "{{url('save_images')}}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        // console.log(res)
                        res.data.forEach(img=>{
                            $('#image_box').prepend(`<div class="col-md-2 mb-1">
                                                        <div class="image-overlay" data-id="${img.delete_id}">
                                                            <span class="filename">${img.file_name}</span>
                                                            <img src="/storage/images/${img.delete_id}">
                                                            <input type="checkbox" class="img-check">
                                                            <span class="text-danger delete-img"><i class="fa fa-times"></i></span>
                                                        </div>
                                                    </div>`)
                        })
                        if($('.image-overlay').length >= max_image_count){
                            $('.upload-box').hide()
                        }
                    },       
                    error: function(res) {
                        console.log(res)
                    } 
                });
            })

            $('body').on('click', '.delete-img', function(){
                
                var file_id = $(this).parent().attr('data-id');
                var parent_div = $(this).parent().parent()
                console.log(file_id)
                $.ajax({
                    url: "{{url('delete_images')}}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data:  {
                        delete_id : file_id,
                        all : 0

                    },
                    contentType: 'application/x-www-form-urlencoded',
                    success: function(res) {
                        if(res==1){
                            parent_div.remove()
                            if($('.image-overlay').length < max_image_count){
                                $('.upload-box').show()
                            }
                        }
                    },       
                    error: function(res) {
                        console.log(res)
                    } 
                });
            })
            $('#delete_all').click(function(){
                var all_ids = [];
                $('.img-check:checked').each(function(d){
                    all_ids.push($(this).parent().attr('data-id'))
                });
                // console.log(all_ids)
                $.ajax({
                    url: "{{url('delete_images')}}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data:  {
                        delete_id : all_ids,
                        all : 1

                    },
                    contentType: 'application/x-www-form-urlencoded',
                    success: function(res) {
                        // if(res==1){
                            $('.img-check:checked').each(function(){
                                $(this).parent().parent().remove()
                            });
                            if($('.image-overlay').length < max_image_count){
                                $('.upload-box').show()
                            }
                        // }
                    },       
                    error: function(res) {
                        console.log(res)
                    } 
                });
            });
            var edit_file_id = null;
            $('body').on('click','.image-overlay img',function(){
                edit_file_id = $(this).parent().attr('data-id');
                $('#upload_image2').trigger('click');
            });
            $('#upload_image2').change(function(){
                var allowedExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp']
                var formdata = new FormData();
                var valid_file = true;
                var file_numbers = $(this)[0].files.length;
                if(file_numbers>0){
                    var file = $(this)[0].files[0];
                        if(file.size>(10*1000000)){
                            alert('More than 10 MB size not allowed')
                            valid_file =  false;
                        }else if(!allowedExtension.includes(file.type.replace('image/',''))){
                            alert('Not valid file')
                            valid_file =  false;
                        }else{
                            console.log(file)
                            formdata.append('file',file);
                        }

                    if(!valid_file){
                        return;
                    }
                }else{
                    alert('No image selected');
                    return;
                }

                // console.log(formdata)
                $.ajax({
                    url: "{{url('update_images')}}/"+edit_file_id,
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        console.log(res)
                        // return;
                        var img = res;

                        $('.image-overlay[data-id="'+edit_file_id+'"]').html(`<span class="filename">${img.file_name}</span>
                                                            <img src="/storage/images/${img.delete_id}">
                                                            <input type="checkbox" class="img-check">
                                                            <span class="text-danger delete-img"><i class="fa fa-times"></i></span>`)
                    
                        $('.image-overlay[data-id="'+edit_file_id+'"]').attr('data-id', img.delete_id)
                    
                    },       
                    error: function(res) {
                        console.log(res)
                    } 
                });
            })

        </script>
    </body>
</html>
