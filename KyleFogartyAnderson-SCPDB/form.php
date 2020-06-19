<form method="post" action="do-add-entry.php">
        
        <div class="container">
            <div class="topcontent">
                <label for="uname"><b>Item Number</b></label>
                <input type="text" placeholder="Enter Item Number" name="itemnumber" required>
                
                <label for="uname"><b>Object Classification</b></label>
                <input type="text" placeholder="Enter Object Classification" name="objectclass" required>
            </div>
            <div class="formcontent">
                <h1>Content 1</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header1" required></textarea>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" width="90vw" placeholder="Enter Content" name="content1" required></textarea>
            </div>
            
            <div id="content1" class="formcontent" style = "display: none;">
                <h1>Content 2</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header2"></input>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" placeholder="Enter Content" name="content2"></textarea>
            </div>
        
            <div id="content2" class="formcontent" style = "display: none;">
                <h1>Content 3</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header3" ></input>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" placeholder="Enter Content" name="content3" ></textarea>
            </div>

            <div id="content3" class="formcontent" style = "display: none;">
                <h1>Content 4</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header4" ></input>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" placeholder="Enter Content" name="content4" ></textarea>
            </div>

            <div id="content4" class="formcontent" style = "display: none;">
                <h1>Content 5</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header5" ></input>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" placeholder="Enter Content" name="content5" ></textarea>
            </div>

            <div id="content5" class="formcontent" style = "display: none;">
                <h1>Content 6</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header6" ></input>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" placeholder="Enter Content" name="content6" ></textarea>
            </div>

            <div id="content6" class="formcontent" style = "display: none;">
                <h1>Content 7</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header7" ></input>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" placeholder="Enter Content" name="content7" ></textarea>
            </div>

            <div id="content7" class="formcontent" style = "display: none;">
                <h1>Content 8</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header8" ></input>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" placeholder="Enter Content" name="content8" ></textarea>
            </div>

            <div id="content8" class="formcontent" style = "display: none;">
                <h1>Content 9</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header9" ></input>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" placeholder="Enter Content" name="content9" ></textarea>
            </div>

            <div id="content9" class="formcontent" style = "display: none;"style = "display: none;">
                <h1>Content 10</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header10" ></input>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" placeholder="Enter Content" name="content10" ></textarea>
            </div>
            
            <button class="submit" type="button" onclick="addContent()">Add Content</button> 
            <button class="submit" type="button" onclick="removeContent()">Remove Content</button> 

            <button class="submit" type="submit">Submit</button>
        
        </div>


        
</form>  






