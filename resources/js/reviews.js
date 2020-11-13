const inputName = document.querySelector("input[type='text']");
const textareaName = document.querySelector("textarea");
const buttonName = document.querySelector("input.sendComment");
const formItems = [inputName, textareaName];

class setBorder {
    constructor (obj, border, boxShadow) {
        this.obj = obj;
        this.border = border;
        this.boxShadow = boxShadow;
        this.setBorder();
    }
    setBorder(){
        this.obj.style.border = this.border;
        this.obj.style.boxShadow = this.boxShadow;
    }
}

buttonName.addEventListener("click", () => {
    formItems.forEach((nameObj) => {
        nameObj.value !== "" ?
        new setBorder(nameObj, "2px solid green", "0px 0px 5px green") :
        new setBorder(nameObj, "2px solid red", "0px 0px 5px red");
    })
})

formItems.forEach((nameObj) => {
    nameObj.addEventListener("input", () => {
        nameObj.value !== "" ?
        new setBorder(nameObj, "2px solid green", "0px 0px 5px green") :
        new setBorder(nameObj, "2px solid red", "0px 0px 5px red");
    })
})

