let image = document.querySelector(".avatar");
console.log(image)

function load(input){
    let file = input.files[0];
    let reader = new FileReader();
    reader.readAsDataURL(file);

    reader.onload = function (){
        console.log(reader.result);
        image.src = reader.result;
    }
}
