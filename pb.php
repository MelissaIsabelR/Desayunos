<table border="1">
    <tr id="fila0">
      <td>Columna 1</td>
      <td>Columna 2</td>
      <td>Columna 3</td>
      <td>Columna 4</td>
      <td>Columna 5</td>
      <td>Columna 6</td>
      <td><input type="button" onclick="eliminarFila(0);" value="Eliminar" /></td>
    </tr>
    <tr id="fila1">
      <td>Columna 1</td>
      <td>Columna 2</td>
      <td>Columna 3</td>
      <td>Columna 4</td>
      <td>Columna 5</td>
      <td>Columna 6</td>
      <td><input type="button" onclick="eliminarFila(1);" value="Eliminar" /></td>
    </tr>
    <tr id="fila2">
      <td>Columna 1</td>
      <td>Columna 2</td>
      <td>Columna 3</td>
      <td>Columna 4</td>
      <td>Columna 5</td>
      <td>Columna 6</td>
      <td><input type="button" onclick="eliminarFila(2);" value="Eliminar" /></td>
    </tr>
    <tr id="fila3">
      <td>Columna 1</td>
      <td>Columna 2</td>
      <td>Columna 3</td>
      <td>Columna 4</td>
      <td>Columna 5</td>
      <td>Columna 6</td>
      <td><input type="button" onclick="eliminarFila(3);" value="Eliminar" /></td>
    </tr>
    <tr id="fila4">
      <td>Columna 1</td>
      <td>Columna 2</td>
      <td>Columna 3</td>
      <td>Columna 4</td>
      <td>Columna 5</td>
      <td>Columna 6</td>
      <td><input type="button" onclick="eliminarFila(4);" value="Eliminar" /></td>
    </tr>
  </table>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    function eliminarFila(index) {
    $("#fila" + index).remove();
}
</script>