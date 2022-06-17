$(document).ready(function()
{
  $('.Content').on('click', '#LoginBotton', function()
  {
    event.preventDefault();
    
    $("#usr").val();
    
    $.post("core/loader.php",
    {
      Work: 'Login',
      User:  $("#usr").val(),
      Pass:  $("#contra").val()
    },
    function(data, status){
      event.preventDefault();
      console.log(data);
      console.log(status);
      var DataParse = JSON.parse(data);
      
      if (DataParse.response) 
      {
        $('.Content').html(DataParse.HtmlResponse);
        $('#message').html('');
        $("#Saludo").text('Welcome' + ' ' + DataParse.Nombre);

              
          } else {
            $('#message').html(DataParse.HtmlResponse);
          }
      });
      

    });

    $('.Content').on('click', '.ToolMenuButton', function()
    {
        event.preventDefault();
        //obtener el boton precionado de la classe menu
        var ToolMenuButtonPressd = this.id;

        $.post("core/loader.php",
        {
          Work: 'MachineFreeSearch',
          OptionSelected:  ToolMenuButtonPressd
        },
        function(data, status){
          event.preventDefault();
          console.log(data);
          console.log(status);
          var DataParse = JSON.parse(data);
          $('#TableContent').html(DataParse.HTMLContent);
        });

    });


    $('.Content').on('click', '.BottonReservMachine', function()
    {
        //event.preventDefault();
        var ToolMachineButtonPressd = this.id;
        $("#DateRange").html(
            '<h3>Selecciona la fecha<h3><input type="date" id="date"></input> <button class="DateSend" id="' + ToolMachineButtonPressd + '">Continuar</button>' 
        );

    });

    $('.Content').on('click', '.DateSend', function()
    {
        event.preventDefault();
        var SendButton = this.id;
        var Date = $("#date").val();

        $.post("core/loader.php",
        {
          Work: 'GetDateTable',
          date:  Date,
          MachineID: SendButton
        },
        function(data, status){
          event.preventDefault();
          console.log(data);
          console.log(status);
          var DataParse = JSON.parse(data);
          $('#TableContent').html(DataParse.HTMLContent);
          var timer;
          timer = setTimeout(CheckUsedMachine(SendButton, Date), 500);

        });




    });


    function CheckUsedMachine(MachineID, Date)
    {
      $(".BottonFamilyReserv").each(function () {
        var Hora = this.id;
        console.log(Hora);

        $.post("core/loader.php",
        {
          Work: 'CheckUsedMachine',
          date:  Date,
          Hora: Hora,
          MachineID: MachineID
        },
        function(data, status){
          event.preventDefault();
          console.log(data);
          console.log(status);
          var DataParse = JSON.parse(data);
          $('#TableContent').html(DataParse.HTMLContent);
        });      
    
      });
    }
});

