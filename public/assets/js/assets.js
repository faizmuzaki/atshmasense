document.getElementById("printButton").addEventListener("click", function () {
  var divToPrint = document.getElementById("divToPrint").innerHTML;
  var popupWin = window.open("", "_blank", "width=827,height=1169");
  popupWin.document.open();
  writeDocumentContent(popupWin.document, divToPrint);
  popupWin.document.close();
});

function writeDocumentContent(doc, content) {
  doc.write(`<html><head>
<title>Print</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body onload="window.print()">`);
  doc.write(`<table style="width: 800px">
<tbody>
  <tr>
    <td style="width: 15%" align="center">
    <img
    src="../../assets/img/logo.png"
    width="124"
    height="98"
  />
    </td>
    <td align="center">
      <p>
        <strong style="font-size: 18pt">ASTHMASENSE</strong>
      </p>
      <p>
        Jl. Prof. Dr. Sumantri Brojonegoro No. 1 Bandar Lampung,
        35145, INDONESIA.<br />
        Telp +62 123 456789 . Fax +62 123 456789<br />Website :
        <a href="http://www.atshmasense.or.id">www.atshmasense.or.id</a>- Email :
        admin@atshmasense.or.id
      </p>
    </td>
  </tr>
</tbody>
</table>
`);
  doc.write(`<hr style="border: 1px solid black" />`);

  doc.write(content);
  doc.write("</body></html>");
}
