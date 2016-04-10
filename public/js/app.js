Dropzone.options.addImages = {
    maxFilesize: 20,
    acceptedFiles: '*.png',
    success:function(file,response){
        console.log(file);
        console.log(response);
    }
};




