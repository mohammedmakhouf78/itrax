body = document.getElementById('body')
bubble1 = document.getElementById('bubble')
bubble2 = document.getElementById('bubble2')
bubble3 = document.getElementById('bubble3')
bubble4 = document.getElementById('bubble4')
let screenWidth = document.body.clientWidth
// let screenHeight = screen.height
let screenHeight = document.body.clientHeight
const bubbles = [bubble1,bubble2,bubble3,bubble4]
const xes = [1,1,1,1]
const yes= [1,1,1,1]



bubble1.style.left = `${Math.floor(Math.random()*(screenWidth-200))}px` 
bubble2.style.left = `${Math.floor(Math.random()*(screenWidth-200))}px` 
bubble3.style.left = `${Math.floor(Math.random()*(screenWidth-200))}px` 
bubble4.style.left = `${Math.floor(Math.random()*(screenWidth-200))}px`

bubble1.style.bottom = `${Math.floor(Math.random()*(screenHeight - 200))}px` 
bubble2.style.bottom = `${Math.floor(Math.random()*(screenHeight - 200))}px` 
bubble3.style.bottom = `${Math.floor(Math.random()*(screenHeight - 200))}px` 
bubble4.style.bottom = `${Math.floor(Math.random()*(screenHeight - 200))}px`




setInterval((e) => {
    moveBubble(bubbles)
    checkIfOutOfBoundries(bubbles)
},10)


function moveBubble(arr){
    for (let i = 0; i < arr.length; i++) {
        let speedLeft = parseFloat(arr[i].style.left) + xes[i]
        let speedBottom = parseFloat(arr[i].style.bottom) + yes[i]
        arr[i].style.left = `${speedLeft}px`;
        arr[i].style.bottom = `${speedBottom}px`;
    }
}



function checkIfOutOfBoundries(arr) {
    for (let i = 0; i < arr.length; i++){
        if (parseFloat(arr[i].style.left) >= screenWidth - 100) {
            if(xes[i] > 0){
                xes[i] = -xes[i]
                addBubbleAnimation(arr[i])
            }else{
                xes[i] = -xes[i]
                addBubbleAnimation(arr[i])
            }
        }
        if (parseFloat(arr[i].style.bottom) >= screenHeight - 150) {
            if(yes[i] > 0){
                yes[i] = -yes[i]
                addBubbleAnimation(arr[i])
            }else{
                yes[i] = -yes[i]
                addBubbleAnimation(arr[i])
            }
        }
        if (parseFloat(arr[i].style.bottom) <= 0) {
            if(yes[i] > 0){
                yes[i] = yes[i]
                addBubbleAnimation(arr[i])
            }else{
                yes[i] = - yes[i]
                addBubbleAnimation(arr[i])
            }
        }
        if (parseFloat(arr[i].style.left) <= 0) {
            if(xes[i] > 0){
                xes[i] = xes[i]
                addBubbleAnimation(arr[i])
            }else{
                xes[i] = - xes[i]
                addBubbleAnimation(arr[i])
            }
        }
    }
}


function addBubbleAnimation(ele){
    ele.classList.add("bubble-anime")
    setTimeout(() => {
        ele.classList.remove("bubble-anime")
    }, 1000);
}