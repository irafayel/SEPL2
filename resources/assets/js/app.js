Dropzone.options.addImages = {
    maxFilesize: 20,
    acceptedFiles: 'images/*',
    success:function(file,response){
        if(file.status=='success'){
            handleDropzoneFileUpload.handleSuccess(response);
        } else {
            handleDropzoneFileUpload.handleError(response);
        }
    }
};

var handleDropzoneFileUpload = {
    handleError: function(response){
        console.log(response);
    },
    handleSuccess: function(response) {
        var imageList = $('#image ul');
        var imageSrc = baseUrl + '/' + response.file_path;
        $(imageList).append('<li><img src="{{ URL::asset('+ imageSrc +') }}" class="img-responsive"></li>');
    }
};




