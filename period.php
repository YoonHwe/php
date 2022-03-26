<!DOCTYPE html>
<html lang="ko">
<?php include '../phpForm/head.php'; ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include '../phpForm/navbar.php'; ?>
<?php include '../phpForm/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>기간별 통계</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">기간별 통계</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- 내용 -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- gallery.html참고 -->
            <div class="mb-2">
              <select class="custom-select" style="width: auto;" data-sortOrder>
                <option value="index"> ABC치과 </option>
                <option value="sortData"> 바이런트치과 </option>
              </select>
              <select class="custom-select" style="width: auto;" data-sortOrder>
                <option value="index"> 파워링크 </option>
                <option value="sortData"> 블로그 </option>
              </select>
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">일주일 단위의 기간별 통계</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th rowspan="2"style="vertical-align:middle">키워드</th>
                    <th rowspan="2"style="vertical-align:middle">작성일자</th>
                    <th colspan="7" style="text-align:center">기간</th>
                  </tr>
                  <tr>
                    <th>11/14</th>
                    <th>11/15</th>
                    <th>11/17</th>
                    <th>11/18</th>
                    <th>11/19</th>
                    <th>11/20</th>
                    <th>11/21</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>임플란트</td>
                    <td>2021-11-03</td>
                    <td>1</td>
                    <td>1</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>5</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>충치치료</td>
                    <td>2021-11-05</td>
                    <td>10</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>10</td>
                    <td>9</td>
                    <td>9</td>
                  </tr>
                  <tr>
                    <td>교정</td>
                    <td>2021-11-11</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>4</td>
                    <td>4</td>
                    <td>5</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>야간진료</td>
                    <td>2021-11-12</td>
                    <td>5</td>
                    <td>6</td>
                    <td>8</td>
                    <td>11</td>
                    <td>13</td>
                    <td>14</td>
                    <td>11</td>
                  </tr>
                  <tr>
                    <td>강남치과</td>
                    <td>2021-11-03</td>
                    <td>13</td>
                    <td>13</td>
                    <td>14</td>
                    <td>13</td>
                    <td>13</td>
                    <td>17</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <td>한의원</td>
                    <td>2021-11-07</td>
                    <td>8</td>
                    <td>9</td>
                    <td>9</td>
                    <td>9</td>
                    <td>10</td>
                    <td>13</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>아토피</td>
                    <td>2021-11-05</td>
                    <td>2</td>
                    <td>2</td>
                    <td>3</td>
                    <td>3</td>
                    <td>2</td>
                    <td>3</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>비염</td>
                    <td>2021-11-11</td>
                    <td>4</td>
                    <td>3</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                  </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>키워드</th>
                    <th>작성일자</th>
                    <th>11/14</th>
                    <th>11/15</th>
                    <th>11/17</th>
                    <th>11/18</th>
                    <th>11/19</th>
                    <th>11/20</th>
                    <th>11/21</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include '../phpForm/script.php'; ?>

</body>
</html>
