<?php 
    use yii\helpers\Html;
    $this->title="Abstract requirements"; 
?>
<div class="container">
    <div class="row text-center">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 text-center">
                <h3 class="section-heading text">Abstract requirements</h3>
                <p class="text-left">
                    Link to upload LaTeX layout: <?= Html::a('DEMM2022TemplateLaTeX.zip',Yii::$app->request->BaseUrl.'/uploads/'.'DEMM2022TemplateLaTeX.zip');?>
                </p>
                <ol>
                    <li style="padding-left: 15px">
                        <p class="text-left">
                            Abstracts up to 2 pages in A4 format are submitted in Russian or English as a tex-file prepared in the LaTeX editor (template is attached). \textwidth=16 cm, \textheight=24 cm, main font size 12 pt. Book orientation. The name of the file indicates the name of the first author.
                        </p>
                    </li>
                    <li style="padding-left: 15px">
                        <p class="text-left">
                            Abstracts are provided as a .zip-archive, which contains a folder named after the first author, containing the original abstract tex-file, all used drawing files (png, jpg, bmp), as well as the corresponding compiled pdf file.<br>
                            At the beginning, the UDC index is indicated according to the UDC classifier.
                        </p>
                    </li>
                    <li style="padding-left: 15px">
                        <p class="text-left">
                            This is followed by the title of the abstract (no more than 10 words, the use of letters of alphabets other than Russian and Latin, Roman numerals, abbreviations and formulas is not allowed).
                        </p>
                    </li>
                    <li style="padding-left: 15px">
                        <p class="text-left">
                            The following is information about the authors (last name, first name, patronymic in full, academic degree, academic title (before the academic title, you must clearly indicate the phrase "academic title", for example, "academic title professor", "academic title associate professor"), position, place of work (full official names of organizations, address with postal code, e-mail are indicated).
                        </p>
                    </li>
                    <li style="padding-left: 15px">
                        <p class="text-left">
                            Further, on a new line after the word “Acknowledgements”, information is given about gratitude (if any) to organizations or institutions, supervisors and other persons, including links to grants.<br>
                            The following is the text of the theses.
                        </p>
                    </li>
                    <li style="padding-left: 15px">
                        <p class="text-left">
                            At the end of the abstract, immediately before the list of references, key words are given in the amount of at least 10 and no more than 25 words.<br>
                            For sources, the list of references should indicate the number / number of pages and DOI (if available). For all electronic resources, it is obligatory to indicate the date of circulation. The list of references includes only those sources, references to which are in the text of the abstract.
                        </p>
                    </li>
                    <li style="padding-left: 15px">
                        <p class="text-left">
                            The list of references should indicate only published works in the original language (Russian or English).<br>
                            The list of references does not include any materials that do not have a specific author (laws, standards (including GOSTs), articles from dictionaries and encyclopedias, website pages), where a specific author is not indicated, references to them are made only as footnotes in the text of the theses.
                        </p>
                    </li>
                    <li style="padding-left: 15px">
                        <p class="text-left">
                            The program committee will consider all received abstracts. The Program Committee reserves the right to reject abstracts that do not correspond to the subject of the conference or are issued in violation of the requirements.
                        </p>
                    </li>
                </ol>
                
        </div>
        <div class="col-md-2"></div>
    </div>
</div>