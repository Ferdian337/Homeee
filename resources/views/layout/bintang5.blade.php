<!-- Script for bar rating -->
<script type="text/javascript">
  var bintang5 = @json($bintang5->values())
  var bintang4 = @json($bintang4->values())
  var bintang3 = @json($bintang3->values())
  var bintang2 = @json($bintang2->values())
  var bintang1 = @json($bintang1->values())

  var jumlah = (bintang1+bintang2+bintang3+bintang4+bintang5);

  var persentaseBintang5 = bintang5/jumlah;
  var persentaseBintang4 = bintang4/jumlah;
  var persentaseBintang3 = bintang3/jumlah;
  var persentaseBintang2 = bintang2/jumlah;
  var persentaseBintang1 = bintang1/jumlah;

  document.write(persentaseBintang5);



</script>