
      <style type="text/css">
        .caadimic{
          white-space: normal;
          width:450px;
        }
        .action{
          text-align: center;
          vertical-align: middle;
          width:60px;

        }
      </style>

      <table class="table-bordered table-hover table-condensed table-striped" id="table-class-info" style="width: 100%">
        <thead>
          <tr>
            <th>Annee</th>
            <th>Programme</th>
            <th>Niveau</th>
            <th>Details</th>
            <th id="hidden">Action</th>
            <th>
              <input type="checkbox" id="checkAll">
            </th>

          </tr>
        </thead>
        <tbody>
          @foreach($mat_prog as $c)
          <tr>
            <td>{{$c->annee}}</td>
             <td>{{$c->programe}}</td>
             <td>{{$c->niveau}} annee</td>
            <td class="caadimic">
              <a href="#" data-id="{{$c->id_matprog}}" id="class-edite">
                Niveau : {{$c->niveau}} annee ** Matiere : {{$c->matiere}}
            </a>

            </td>
            <td class="action" id="hidden"><button value="{{$c->id_matprog}}" class="btn btn-danger  del-class"> Supp </button></td>
        <td>
            <input type="checkbox" name="chk[]" value="{{$c->id_matprog}}" class="chk">

         </td>


            </tr>

           @endforeach


        </tbody>
      </table>
