
    let carousel_s_form = document.getElementById('carousel_s_form');
    let member_picture_inp = document.getElementById('member_picture_inp');

   

    carousel_s_form.addEventListener('submit',function(e){
        e.preventDefault();
        add_member();
    });

    function add_member()
    {
        let data = new FormData();
        data.append('name',member_name_inp.value);
        data.append('picture',member_picture_inp.files[0]);
        data.append('add_member','');

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);

        xhr.onload = function(){
            var myModal = document.getElementById('team-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if(this.responseText == 'inv_img'){
             alert('error','Only JPG and PNG images allow!');
            }
            else if(this.responseText == 'inv_size'){
                alert('error','image should be less than 2MB!');
            }
            else if(this.responseText == 'upd_failed'){
                alert('error','Image upload failed!');
            }
            else{
                alert('success','New member added!');
                member_name_inp.value='';
                member_picture_inp.value='';
                get_members();
            }

        }

        xhr.send(data);
    }

    function get_members()
    {
        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            document.getElementById('team-data').innerHTML = this.responseText;
        }


        xhr.send('get_members');  
    }

    function rem_member(val)
    {
        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            if(this.responseText==1){
                alert('success','Member removed!');
                get_members();
            }
            else{
                alert('error','Server down!');
            }
        }


        xhr.send('rem_member='+val);  
    }


    window.onload = function(){
        get_general();
        get_contacts();
        get_members();
    }

