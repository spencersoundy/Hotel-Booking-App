
function get_all_rooms()
{
    let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/rooms.php",true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            document.getElementById('room-data').innerHTML = this.responseText;
        }

    xhr.send('get_all_rooms');
}


?


window.onload = function(){
    get_all_rooms();
}