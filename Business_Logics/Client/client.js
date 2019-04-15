var Id;
$(document).ready(function(){
    // jQuery Function Call here...
    readClient();
    readMaxClient();

});

function readMaxClient()
{
    var action = "fetch";
    $.ajax({
        url:"Database/Client/readMax.php",
        method:"POST",
        data:{action:action},
        success:function(rows)
        {
            var user = JSON.parse(rows);
            for(var i=0; i<user.length;i++){
                var maxid = user[i].maxid;
                maxid++;
               // alert(maxid)
               if(maxid <= 9){
                   maxid = "KA00"+maxid;
               }else if(maxid >= 10 && maxid <= 99){
                   maxid = "KA0"+maxid;
               }else if(maxid >= 100){
                maxid = maxid = "KA"+maxid;
               }
                $('#client_id').val(maxid);
            }
        }
    })

}
var k =1;
function addContactPerson()
{

    $('#tblPerson').append('<tbody><tr id="rowid_'+k+'"><td id="n_'+k+'">'+ $('#c_name').val()+'</td><td id="m_'+k+'">'+ $('#c_mail').val()+'</td><td id="d_'+k+'">'+ $('#c_desg').val()+'</td><td id="p_'+k+'">'+ $('#c_phnum').val()+'</td><td id="dk_'+k+'">'+ $('#c_desknum').val()+'</td><td class="actions-hover actions-fade"><span class="delete-row" style="margin-left:10px;"><i class="fa fa-trash-o" onclick="deletePerson('+k+')"></i></span></td></tr></tbody>')
  k++;
    $.post("Database/Client/addPerson.php", {
    
        ClientID : $('#client_id').val(),
        CName : $('#c_name').val(),
        CMail : $('#c_mail').val(),
        CDesg : $('#c_desg').val(),
        CPhnum : $('#c_phnum').val(),
        CDesknum : $('#c_desknum').val()
                
    },
    function (data, status) {
       // alert(data)
    });
}

function deletePerson(k){
    $.post("Database/Client/deletePerson.php", {
    
        ClientID : $('#client_id').val(),
        CName : $('#n_'+k).text(),
        CMail : $('#m_'+k).text(),
        CDesg : $('#d_'+k).text(),
        CPhnum : $('#p_'+k).text(),
        CDesknum : $('#dk_'+k).text()
                
    },
    function (data) {
        alert(data)
        $('#rowid_'+k).remove();

    });
}

function saveClient()
{
    
  
    $.post("Database/Client/add.php", {
    
        ClientID : $('#client_id').val(),
        ClientName : $('#client_name').val(),
        CaseType : $('#case_type').val(),
        CaseNum : $('#case_num').val(),
        CaseDate : $('#case_date').val(),
        ClientAdrs : $('#client_adrs').val(),
        ClientState : $('#client_state').val(),
        ClientCity : $('#client_city').val(),
        ClientyPin : $('#client_pincode').val(),
        ClientDesk : $('#client_desknum').val(),
        ClientPh : $('#client_phnum').val()
                
    },
    function (data, status) {
        $('#doctormodel').modal({
            backdrop: 'static',
            keyboard: false
        }) 
        var newdata;
        if(data=="Save Successfuly"){
            newdata=data.fontcolor("green")
        }else{
            newdata=data.fontcolor("red")
        }
         
        $('#data').append(newdata)
       window.location.reload()
    });
}



function readClient()
{
    var action = "fetch";
    $.ajax({
        url:"Database/Client/read.php",
        method:"POST",
        data:{action:action},
        success:function(rows)
        {
            var user = JSON.parse(rows);
            //alert(JSON.stringify(user))
            if(user != "0" ){
                for(var i=0; i<user.length;i++){
                    
                    $('#tblClient').append('<tbody><tr id="row_'+user[i].id+'"><td id="rowbid_'+user[i].id+'">' + user[i].clientID + '</td><td id="rowbname_'+user[i].id+'">'+ user[i].clientName+'</td><td id="rowbrname_'+user[i].id+'">'+ user[i].caseType+'</td><td id="rowifsc_'+user[i].id+'">'+ user[i].caseNumber+'</td><td class="actions-hover actions-fade"><span><i class="fa fa-pencil" onclick="getClient('+user[i].id+')"></i></span><span class="delete-row" style="margin-left:10px;"><i class="fa fa-trash-o" onclick="deleteClient('+user[i].id+')"></i></span></td></tr></tbody>');
                
                }
            }else{
                $('#tblClient').append('<tbody><tr><td colspan="5" style="text-align:center;font-weight:700;color:red;">DATA NOT FOUND</td></tr></tbody>');
                
            }    
        }
    })
}

function getClient(id)
{
     
    
    $('#saveClient').hide();
    $('#updateClient').show();
    $.post("Database/Client/getClient.php", {
    
        ClientID : $('#rowbid_'+id).text()
                
    },
    function (rows) {
        var user = JSON.parse(rows);
           // alert(JSON.stringify(user))
            if(user != "0" ){
                for(var i=0; i<user.length;i++){

                    $('#client_id').val(user[i].clientID)
                    $('#client_name').val(user[i].clientName)
                    $('#case_type').append('<option>'+user[i].caseType+'</option>')
                    $('#case_num').val(user[i].caseNumber)
                    $('#case_date').val(user[i].entryDate)
                    $('#client_adrs').val(user[i].clientAddress)
                    $('#client_state').val(user[i].clientState)
                    $('#client_city').val(user[i].clientCity)
                    $('#client_pincode').val(user[i].postalCode)
                    $('#client_desknum').val(user[i].deskNumber)
                    $('#client_phnum').val(user[i].phoneNumber)

                }
            }else{

            }
        
       
    });

    $.post("Database/Client/getPerson.php", {
    
        ClientID : $('#rowbid_'+id).text()
                
    },
    function (rows) {
        var user = JSON.parse(rows);
       // alert(JSON.stringify(user))
        if(user != "0" ){
            for(var i=0; i<user.length;i++){
                
                $('#tblPerson').append('<tbody><tr id="rowid_'+user[i].id+'" class="row_clr"><td id="n_'+user[i].id+'">'+user[i].contactName+'</td><td id="m_'+user[i].id+'">'+ user[i].contactEmail+'</td><td id="d_'+user[i].id+'">'+user[i].contactDesignation+'</td><td id="p_'+user[i].id+'">'+ user[i].phoneNumber+'</td><td id="dk_'+user[i].id+'">'+ user[i].deskNumber+'</td><td class="actions-hover actions-fade"><span><i class="fa fa-pencil" onclick="getP('+user[i].id+')"></i></span><span class="delete-row" style="margin-left:10px;"><i class="fa fa-trash-o" onclick="deleteP('+user[i].id+')"></i></span></td></tr></tbody>')

            }
        }else{

        }
       
    });
    
} 
var personId;
function getP(id){
    $('#addContactPerson').hide();
    $('#updateContactPerson').show();
    personId = id;
    $('#c_name').val($('#n_'+id).text())
    $('#c_mail').val($('#m_'+id).text())
    $('#c_desg').val($('#d_'+id).text())
    $('#c_phnum').val($('#p_'+id).text())
    $('#c_desknum').val( $('#dk_'+id).text())
}
function updateClient()
{
    var ID = Id;
    
    $.post("Database/Client/update.php", {
    
        ClientID : $('#client_id').val(),
        ClientName : $('#client_name').val(),
        CaseType : $('#case_type').val(),
        CaseNum : $('#case_num').val(),
        CaseDate : $('#case_date').val(),
        ClientAdrs : $('#client_adrs').val(),
        ClientState : $('#client_state').val(),
        ClientCity : $('#client_city').val(),
        ClientyPin : $('#client_pincode').val(),
        ClientDesk : $('#client_desknum').val(),
        ClientPh : $('#client_phnum').val()
                
    },
    function (data, status) {
        $('#doctormodel').modal({
            backdrop: 'static',
            keyboard: false
        }) 
        var newdata;
        if(data=="Update Successfuly"){
            newdata=data.fontcolor("green")
        }else{
            newdata=data.fontcolor("red")
        }
         
        $('#data').append(newdata)
    });

}

function updateContactPerson(){

    $.post("Database/Client/updatePerson.php", {
    
        ClientID : personId,
        CName : $('#c_name').val(),
        CMail : $('#c_mail').val(),
        CDesg : $('#c_desg').val(),
        CPhnum : $('#c_phnum').val(),
        CDesknum : $('#c_desknum').val()
                
    },
    function (data, status) {
        $('#doctormodel').modal({
            backdrop: 'static',
            keyboard: false
        }) 
        var newdata;
        if(data=="Update Successfuly"){
            newdata=data.fontcolor("green")
        }else{
            newdata=data.fontcolor("red")
        }
         
        $('#data').append(newdata)
        $('.row_clr').detach();
        window.location.reload();
       // getPrn()
    });

}
function getPrn(){
    $('.row_clr').detach();
    $.post("Database/Client/getPerson.php", {
    
        ClientID : $('#client_id').val()
                
    },
    function (rows) {
        var user = JSON.parse(rows);
       // alert(JSON.stringify(user))
        if(user != "0" ){
            for(var i=0; i<user.length;i++){
                
                $('#tblPerson').append('<tbody><tr id="rowid_'+user[i].id+'"><td id="n_'+user[i].id+'">'+user[i].contactName+'</td><td id="m_'+user[i].id+'">'+ user[i].contactEmail+'</td><td id="d_'+user[i].id+'">'+user[i].contactDesignation+'</td><td id="p_'+user[i].id+'">'+ user[i].phoneNumber+'</td><td id="dk_'+user[i].id+'">'+ user[i].deskNumber+'</td><td class="actions-hover actions-fade"><span><i class="fa fa-pencil" onclick="getP('+user[i].id+')"></i></span><span class="delete-row" style="margin-left:10px;"><i class="fa fa-trash-o" onclick="deleteP('+user[i].id+')"></i></span></td></tr></tbody>')

            }
        }else{

        }
       
    });
}

function deleteP(id){
    $.post("Database/Client/deletePerson.php", {
    
        ClientID : $('#client_id').val(),
        CName : $('#n_'+id).text(),
        CMail : $('#m_'+id).text(),
        CDesg : $('#d_'+id).text(),
        CPhnum : $('#p_'+id).text(),
        CDesknum : $('#dk_'+id).text()
                
    },
    function (data) {
        $('#doctormodel').modal({
            backdrop: 'static',
            keyboard: false
        }) 
        var newdata;
        if(data=="Delete Successfuly"){
            newdata=data.fontcolor("green")
        }else{
            newdata=data.fontcolor("red")
        }
         
        $('#data').append(newdata)
        $('#rowid_'+id).remove();

    });
}

function deleteClient(id){
    Id = id;
    $('#doctordeletemodel').modal({
        backdrop: 'static',
        keyboard: false
    }) 

}




function deleteCL()
{
    $.post("Database/Client/delete.php", {
        
        ID : Id           
    },
    function (data, status) {
        $('#doctormodel').modal({
            backdrop: 'static',
            keyboard: false
        }) 
        var newdata;
        if(data=="Delete Successfuly"){
            newdata=data.fontcolor("green")
        }else{
            newdata=data.fontcolor("red")
        }
         
        $('#data').append(newdata)
      //  window.location.reload();
    });
    
}

function pageReload(){
    window.location.reload();
}




