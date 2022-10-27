<style>
    #my_pdf_viewer{
        padding: 20px;
    }
    #canvas_container {
      width: 100%;
      height: 600px;
      overflow: auto;
    }
    #canvas_container {
        background: #333;
        text-align: center;
        border: solid 3px;
    }
    #zoom_controls{
        margin:5px;
    }
    #zoom_controls button{
        margin-top: 5px;
    }
  </style>
<script
    src="http://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
  </script>
<?php
$title = 'Nkgwete IT Solutions | Help Centere';
$content = '
<!--============= Banner Section Starts Here =============-->
<section class="banner-1 bg_img" data-background="assets/images/banner/banner-6.jpg">
    <div class="container">
        <div class="banner-content cl-white">
            <h1 class="title">Self-Help</h1>
            <p>Guide</p>
        </div>
    </div>
</section>
<!--============= Banner Section Ends Here =============-->
<!--============= Knowledge Single Section Starts Here =============-->
<section class="knowledge-single-section padding-bottom padding-top oh">
    <div class="container">
        <div class="row mb-70">
            <div class="col-xl-8 col-lg-7 mb-10">
                <div class="knowledge-single">
                    <div class="knowledge-header">
                        <h3 class="title">How to add multiple organizations</h3>
                        <ul class="knowledge-meta">
                            <li>Created: <a href="#0">Jul 14, 2020</a></li>
                            <li>Updated: <a href="#0">Sep 19, 2022</a></li>
                        </ul>
                    </div>
                    <!-- SHOW DOCUMENT CONTENT HERE -->
                    <div id="my_pdf_viewer">
                        <div id="canvas_container">
                            <canvas id="pdf_renderer"></canvas>
                        </div>
                        <div id="navigation_controls">
                            <button id="go_previous">Previous</button>
                            <input id="current_page" value="1" type="number"/>
                            <button id="go_next">Next</button>
                        </div>
                        <div id="zoom_controls">  
                            <button class="btn btn-info" id="zoom_in">+</button>
                            <button class="btn btn-info" id="zoom_out">-</button>
                        </div>
                    </div>
                </div>
            </div>
<!--BeGIN RIGHT SIDE-->
            <div class="col-xl-4 col-lg-5 mb-10">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="knowledge-widget">
                            <div class="call-to-page">
                                <h5 class="title">Is this Article Helpful?</h5>
                                <p>Content Feedback</p>
                                <div id="response">
                                <a href="#0" class="call-button" onclick="response()" style="background-color: #8aca38">Yes</a>
                                <a href="#0" class="call-button" onclick="response()" style="background-color: #00B2f2">No</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="title my-4">Suggested Articles</h5>
                <div class="row justify-content-center mb-20-none">
                    <div class="col-lg-12 col-md-6">
                        <a class="popular-item" onclick="myFunction(`pdf/pdf-test.pdf`)">
                            <div class="popular-thumb">
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="popular-content">
                                <span class="info">Digital Signature</span>
                                <p>How to add signature on PDF file</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <a class="popular-item" onclick="myFunction(`pdf/pdf-sample.pdf`)">
                            <div class="popular-thumb">
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="popular-content">
                                <span class="info">Remote Work</span>
                                <p>ESKOM - Work from Home (Remote Telecommuting)</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <a href="Changing your password on the Self Service Portal.docx" class="popular-item">
                            <div class="popular-thumb">
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="popular-content">
                                <span class="info">For Companies</span>
                                <p>How to withdraw money from your account</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Knowledge Single Section Ends Here =============-->
';
include 'Template.php'
?>
<script>
    function response(){
        document.getElementById("response").innerHTML = "Thank you for your response!"
    }
</script>
<script>
    //Make file path a variable
    let filPath = "pdf/Get_Started_With_Smallpdf.pdf";
    console.log(filPath);
    //function to change file in the pdf viewer
    function myFunction(path) {
        // console.log(path);
        filPath = path;
    var myState = {
        pdf: null,
        currentPage: 1,
        zoom: 1
    }
    pdfjsLib.getDocument(filPath).then((pdf) => {
        myState.pdf = pdf;
        render();
    });
    function render() {
        myState.pdf.getPage(myState.currentPage).then((page) => {
            var canvas = document.getElementById("pdf_renderer");
            var ctx = canvas.getContext('2d');
            var viewport = page.getViewport(myState.zoom);
            canvas.width = viewport.width;
            canvas.height = viewport.height;
            page.render({
                canvasContext: ctx,
                viewport: viewport
            });
        });
    }
    document.getElementById('go_previous').addEventListener('click', (e) => {
        if(myState.pdf == null || myState.currentPage == 1) 
            return;
        myState.currentPage -= 1;
        document.getElementById("current_page").value = myState.currentPage;
        render();
    });
    document.getElementById('go_next').addEventListener('click', (e) => {
        if(myState.pdf == null || myState.currentPage > myState.pdf._pdfInfo.numPages) 
            return;
        myState.currentPage += 1;
        document.getElementById("current_page").value = myState.currentPage;
        render();
    });
    document.getElementById('current_page').addEventListener('keypress', (e) => {
        if(myState.pdf == null) return;
        // Get key code
        var code = (e.keyCode ? e.keyCode : e.which);
        // If key code matches that of the Enter key
        if(code == 13) {
            var desiredPage =
            document.getElementById('current_page').valueAsNumber;
            if(desiredPage >= 1 && desiredPage <= myState.pdf._pdfInfo.numPages) {
                myState.currentPage = desiredPage;
                document.getElementById("current_page").value = desiredPage;
                render();
            }
        }
    });
    document.getElementById('zoom_in').addEventListener('click', (e) => {
        if(myState.pdf == null) return;
        myState.zoom += 0.5;
        render();
    });
    document.getElementById('zoom_out').addEventListener('click', (e) => {
        if(myState.pdf == null) return;
        myState.zoom -= 0.5;
        render();
    });
}
</script>