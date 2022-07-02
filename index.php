<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once "setHead.php";
  require_once "connect.php";
  ?>
</head>
<style>
  span {
    font-weight: bold;
    font-size: 24px;
  }

  .chart-value {
    position: absolute;
    width: 100%;
    text-align: center;
    /* margin-left: -2%; */
    margin-top: 70%;
    font-weight: bold;
    font-size: 18px;
  }

  .chart-min {
    position: absolute;
    width: 100%;
    text-align: left;
    margin-left: 9%;
    margin-top: 85%;
    font-weight: bold;

  }

  .chart-max {
    position: absolute;
    width: 100%;
    text-align: left;
    margin-left: 75%;
    margin-top: 85%;
    font-weight: bold;
  }

  .chart-size {
    position: relative;
    height: 150px;
    width: auto;
  }

  .bg-color-red {
    background-color: #D61C4E;
  }

  .bg-color-21 {
    background-color: #F77E21;
  }

  .h-box {
    height: 200px;
    width: 150px;
    margin: auto;
  }
</style>

<body>
  <?php require_once "menu.php"; ?>
  <div class="container">
    <table class="table">
      <tr>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 1 ช่างเชื่อมใหม่</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="11"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a11" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="12"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a12" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="13"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a13" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val11"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v11" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val12"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v12" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val13"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v13" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh1"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 2 แอร์อาคารคมสัน</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="21"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a21" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="22"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a22" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="23"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a23" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val21"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v21" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val22"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v22" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val23"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v23" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh2"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 3 สหกรณ์</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="31"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a31" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="32"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a32" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="33"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a33" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val31"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v31" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val32"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v32" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val33"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v33" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh3"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 4 ช่างแมคคา</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="41"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a41" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="42"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a42" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="43"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a43" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val41"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v41" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val42"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v42" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val43"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v43" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh4"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 5 ช่างเชื่อมเก่า</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="51"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a51" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="52"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a52" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="53"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a53" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val51"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v51" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val52"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v52" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val53"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v53" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh5"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 6 ช่างก่อสร้าง</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="61"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a61" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="62"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a62" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="63"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a63" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val61"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v61" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val62"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v62" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val63"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v63" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh6"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 7 ช่างไฟฟ้า</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="71"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a71" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="72"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a72" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="73"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a73" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val71"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v71" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val72"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v72" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val73"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v73" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh7"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 8 ช่างอิเล็ก</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="81"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a81" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="82"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a82" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="83"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a83" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val81"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v81" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val82"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v82" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val83"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v83" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh8"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 9 ช่างยนต์เก่า</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="91"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a91" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="92"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a92" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="93"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a93" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val91"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v91" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val92"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v92" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val93"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v93" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh9"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 10 ระบบราง</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="101"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a101" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="102"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a102" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="103"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a103" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val101"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v101" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val102"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v102" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val103"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v103" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh10"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 11 ช่างอุตสาหกรรม</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="111"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a111" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="112"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a112" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="113"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a113" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val111"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v111" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val112"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v112" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val113"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v113" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh11"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 12 ช่างกล</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="121"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a121" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="122"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a122" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="123"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a123" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val121"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v121" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val122"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v122" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val123"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v123" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh12"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 13 ช่างยนต์ใหม่</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="131"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a131" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="132"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a132" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="133"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a133" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val131"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v131" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val132"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v132" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val133"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v133" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh13"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
        <td>
          <div class="card">
            <div class="card-header bg-color-red text-light">
              <h4>มิเตอร์ 14 CNC</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="141"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a141" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="142"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a142" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="143"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">300 A</div>
                          <canvas id="a143" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val141"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v141" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val142"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v142" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <div class="chart-container chart-size">
                          <div class="chart-value" id="val143"></div>
                          <div class="chart-min">0</div>
                          <div class="chart-max">250 V</div>
                          <canvas id="v143" width="250" height="250"></canvas>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table class="table">
                <tr>
                  <td>
                    <div class="card shadow">
                      <div class="card-body h-box">
                        <h5 class="mt-5">⚡ Kwh <span id="kwh14"></span></h5>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>
<?php require_once "setFoot.php"; ?>

<script>
  $(document).ready(function() {
    let ida = ""
    let v1 = ""
    let v2 = ""
    let v3 = ""
    let c1 = ""
    let c2 = ""
    let c3 = ""
    let kwhV = ""

    var ctA1 = ""
    var ctA2 = ""
    var ctA3 = ""
    var ctV1 = ""
    var ctV2 = ""
    var ctV3 = ""
    var kwh = ""
    let valA1 = ""
    let valA2 = ""
    let valA3 = ""
    let valV1 = ""
    let valV2 = ""
    let valV3 = ""
    <?php
    $sqlM = "select * from log_data where date(time_stamp) = CURDATE()";
    $resM = mysqli_query($conn, $sqlM);
    while ($rowM = mysqli_fetch_array($resM)) { ?>

      ida = '<?php echo  $rowM["id"]; ?>'
      v1 = '<?php echo  $rowM["v1"]; ?>'
      v2 = '<?php echo  $rowM["v2"]; ?>'
      v3 = '<?php echo  $rowM["v3"]; ?>'

      c1 = '<?php echo  $rowM["c1"]; ?>'
      c2 = '<?php echo  $rowM["c2"]; ?>'
      c3 = '<?php echo  $rowM["c3"]; ?>'
      kwhV = <?php echo  $rowM["kwh"]; ?>

      ctA1 = document.getElementById("a" + ida + "1")
      ctA2 = document.getElementById("a" + ida + "2")
      ctA3 = document.getElementById("a" + ida + "3")
      ctV1 = document.getElementById("v" + ida + "1")
      ctV2 = document.getElementById("v" + ida + "2")
      ctV3 = document.getElementById("v" + ida + "3")
      kwh = $("#" + "kwh" + ida)
      valA1 = $("#" + ida + "1")
      valA2 = $("#" + ida + "2")
      valA3 = $("#" + ida + "3")
      valV1 = $("#" + "val" + ida + "1")
      valV2 = $("#" + "val" + ida + "2")
      valV3 = $("#" + "val" + ida + "3")

      drawChart1(ctA1, c1)
      drawChart1(ctA2, c2)
      drawChart1(ctA3, c3)
      drawChart2(ctV1, v1)
      drawChart2(ctV2, v2)
      drawChart2(ctV3, v3)
      valA1.html(c1)
      valA2.html(c2)
      valA3.html(c3)
      valV1.html(v1)
      valV2.html(v2)
      valV3.html(v3)
      kwh.html(kwhV.toFixed(2))
    <?php } ?>
  })

  function drawChart1(ctx, val) {
    var myChartV1 = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Amp"],
        datasets: [{
          display: true,
          label: '# of Votes',
          data: [val, 100 - 50],
          text: "ff",
          backgroundColor: [
            '#F77E21'
          ],
          borderColor: [

            '#F77E21'
          ],
          borderWidth: 1
        }]
      },
      options: {
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI,
      },
    });
  }

  function drawChart2(ctx, val) {
    var myChartV1 = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Voltage"],
        datasets: [{
          display: true,
          label: '# of Votes',
          data: [val, 100 - 50],
          text: "ff",
          backgroundColor: [
            '#FAC213'
          ],
          borderColor: [

            '#FAC213'
          ],
          borderWidth: 1
        }]
      },
      options: {
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI,
      },
    });
  }


  //---------End donut chart
  client = new Paho.MQTT.Client("202.29.229.243", Number(8883), "clientId");
  client.onConnectionLost = onConnectionLost;
  client.onMessageArrived = onMessageArrived;

  client.connect({
    onSuccess: onConnect
  });

  function onConnect() {
    console.log("onConnect");
    client.subscribe("TEST/MQTT");
    client.subscribe("data_meter");
    // message = new Paho.MQTT.Message("Hello MQTT");
    // message.destinationName = "TEST/MQTT";
    // client.send(message);
  }

  function onConnectionLost(responseObject) {
    if (responseObject.errorCode !== 0) {
      console.log("onConnectionLost:" + responseObject.errorMessage);
    }
  }

  function onMessageArrived(message) {
    // console.log(message)
    if (message.payloadString) {
      let data = JSON.parse(message.payloadString)
      console.log(data);
      //----meter 1
      var ctA1 = document.getElementById("a" + data[0] + "1")
      var ctA2 = document.getElementById("a" + data[0] + "2")
      var ctA3 = document.getElementById("a" + data[0] + "3")
      var ctV1 = document.getElementById("v" + data[0] + "1")
      var ctV2 = document.getElementById("v" + data[0] + "2")
      var ctV3 = document.getElementById("v" + data[0] + "3")
      var kwh = $("#" + "kwh" + data[0])
      let valA1 = $("#" + data[0] + "1")
      let valA2 = $("#" + data[0] + "2")
      let valA3 = $("#" + data[0] + "3")
      let valV1 = $("#" + "val" + data[0] + "1")
      let valV2 = $("#" + "val" + data[0] + "2")
      let valV3 = $("#" + "val" + data[0] + "3")

      drawChart1(ctA1, data[2])
      drawChart1(ctA2, data[4])
      drawChart1(ctA3, data[6])
      drawChart2(ctV1, data[1])
      drawChart2(ctV2, data[3])
      drawChart2(ctV3, data[5])
      valA1.html(data[2])
      valA2.html(data[4])
      valA3.html(data[6])
      valV1.html(data[1])
      valV2.html(data[3])
      valV3.html(data[5])
      kwh.html(data[8].toFixed(2))

      // $("#" + data[0]).html(data[8].toFixed(2) + " kWh")

    }
  }
</script>