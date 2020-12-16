<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from www.jdoodle.com/c-online-compiler by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jan 2018 07:15:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Online C Compiler - Online C Editor - Online C IDE -  C Coding Online - Online C Runner - Share Save C Program online"/>
    <meta name="Keywords" content="Online C Compiler - Online C Editor - Online C IDE - C Coding Online - Online C Runner -  Share Save C online"/>
    <title>Online C Compiler - Online C Editor -  Run C Online - Online C Runner</title>

    <meta property="og:url" content="index.html"/>
    <meta property="og:title" content="JDoodle - free Online  Compiler, Editor for Java, C/C++, etc"/>
    <meta property="og:description" content="JDoodle is a free Online  Compiler, Editor, IDE  for Java, C, C++, PHP, Perl, Python, Ruby and many more.  you can run your programs on the fly online and you can save and share them with others. Quick and Easy way to compile and run programs online."/>
    <meta property="og:image" content="static/images/jdoodle-fb.png"/>
    <meta property="og:image:alt" content="JDoodle"/>
    <meta name="google-site-verification" content="UvObv0WXViGO2pEP8egoe3k1sXqHcsSeAfEEjnUyuXg"/>
    <meta name="msvalidate.01" content="93539EB8D681BD90594A81FCAF6560BC"/>
    <link rel="shortcut icon" href="static/images/favicon.ico"/>

    
        <link rel="canonical" href="c-online-compiler.html"/>
    
</head>

<body class="container-fluid">
    <div id="jdoodle-app" v-bind:class="{'dark': darkMode}">
        <div class="jdoodle-body">
            <div class="row hero-unit">
    <div class="col-sm-12 col-xs-12">
        <a class="brand col-sm-3 col-xs-6" href="index.html">
            <img src="static/images/jdoodle.png" alt="JDoodle" v-if="!darkMode"/>
            <img src="static/images/jdoodle-dark.png" alt="JDoodle" v-if="darkMode"/>
        </a>

        <div class="btn-groups col-sm-3 login-button-group  col-xs-6 hidden-print" v-cloak>
            <div class="btn-group pull-right" v-show="isUserLoggedIn" id="signedIn-group">
                <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span id="signed-displayname" v-cloak>{{this.username}}</span> <span class="caret"></span></button>
                <ul class="dropdown-menu text-left">
                    <li><a v-on:click="showSection('changePassword')" href="javascript:">Change Password</a></li>
                    <li><a v-on:click="showSection('changeDisplayName')" href="javascript:">Change Display Name</a></li>
                    <li><a href="index.html">Logout</a></li>
                </ul>
            </div>
            <button class="btn btn-primary btn-md" v-show="!isUserLoggedIn" v-on:click="showSection('signIn')">Sign in</button>
        </div>

        <div class="col-sm-6 col-xs-12 hidden-print">
            <div class="text-center">
                <h4 class="tagline">Easy and Quick way to  run Programs Online</h4>
            </div>
            <div class="socials text-center">
               <div class="addthis_inline_share_toolbox"></div>
            </div>
        </div>
    </div>
</div>
            
            <div class="margin-top-10px col-xs-12 text-center error well" v-cloak v-show="errorMessage">{{errorMessage}}</div>
            <div v-cloak>
                
                    <div class="row" v-show="display.home" v-bind:class="{'dark':darkMode}">
    <div class="col-xs-12"  v-bind:class="{'padding-left-right-none':isHtml}">
        
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center ad-area hidden-xs hidden-print">
                
    <!-- jdoodle-responsive-top -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-8361819892821196"
         data-ad-slot="1021547331"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>


            </div>
        
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 code-area" >
                <div class="row-fluid text-center">
                    <div class="lang-title">C</div>
                    <div class="btn-group hidden-print">
                        <button class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown">Goto other Language Compilers/IDEs in JDoodle<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-center switch-to">
                            <div class="row-fluid">
    <div class="col-sm-12 col-xs-12 text-center">

        <div class="row-fluid">
            <div class="input-group col-xs-12 col-sm-4 col-sm-offset-4 text-center">
                <input type="text" class="form-control" placeholder="Search a Language" v-model="searchLanguage" v-on:keyUp="searchLinks"/>
                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            </div>
        </div>
        <div class="row-fluid" v-show="!searchLanguage">
            <div class="col-sm-12 lang-text"><a href="online-java-compiler.html">Java</a></div>
            <div class="col-sm-12 lang-text"><a href="html-css-javascript-online-editor.html">HTML/CSS/Javascript</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="c-online-compiler.html">C</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="online-compiler-c%2b%2b.html">C++</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="online-compiler-c%2b%2b14.html">C++ 14</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-c99-online.html">C99</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-c-sharp-online.html">C#</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="php-online-editor.html">PHP</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-perl-online.html">Perl</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-ruby-online.html">Ruby</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="python-programming-online.html">Python2</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="python3-programming-online.html">Python3</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-sql-online.html">SQL</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-scala-online.html">Scala</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-vb-dot-net-online.html">VB.Net</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-pascal-online.html">Pascal</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-haskell-online.html">Haskell</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-kotlin-online.html">Kotlin</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-swift-online.html">Swift</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-objective-c-online.html">Objective-C</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-groovy-online.html">Groovy</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-fortran-online.html">Fortran</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-brainfuck-online.html">Brainf**k</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-hack-online.html">Hack</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-tcl-online.html">TCL</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-lua-online.html">Lua</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-rust-online.html">Rust</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-r-online.html">R</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-ada-online.html">Ada</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-d-online.html">D</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-dart-online.html">Dart</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-yabasic-online.html">YaBasic</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-freebasic-online.html">Free Basic</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-clojure-online.html">Clojure</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-verilog-online.html">Verilog</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-nodejs-online.html">NodeJS</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-scheme-online.html">Scheme</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-forth-online.html">Forth</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-prolog-online.html">Prolog</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="test-bash-shell-script-online.html">Bash</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-cobol-online.html">COBOL</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-octave-matlab-online.html">OCTAVE/Matlab</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-icon-online.html">Icon</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-coffeescript-online.html">CoffeeScript</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-assembler-gcc-online.html">Assembler (GCC)</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-fsharp-online.html">F#</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-assembler-nasm-online.html">Assembler (NASM)</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-intercal-online.html">Intercal</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-nemerle-online.html">Nemerle</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-ocaml-online.html">Ocaml</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-unlambda-online.html">Unlambda</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-picolisp-online.html">Picolisp</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-clisp-online.html">CLISP</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-elixir-online.html">Elixir</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-spidermonkey-online.html">SpiderMonkey</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-rhino-online.html">Rhino JS</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-bc-online.html">BC</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-nim-online.html">Nim</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-factor-online.html">Factor</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-falcon-online.html">Falcon</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-fantom-online.html">Fantom</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-pike-online.html">Pike</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-go-online.html">Go</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-oz-mozart-online.html">OZ-Mozart</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-lolcode-online.html">LOLCODE</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-racket-online.html">Racket</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-smalltalk-online.html">SmallTalk</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-whitespace-online.html">Whitespace</a></div>

            <div class="col-xs-12 col-sm-12 lang-text terminal-title">Online Interactive Terminals</div>
            <div class="col-xs-6 col-sm-6 lang-text"><a href="online-mysql-terminal.html">MySQL</a></div>
            <div class="col-xs-6 col-sm-6 lang-text"><a href="online-mongodb-terminal.html">MongoDB</a></div>

            <div class="col-xs-12 col-sm-12 lang-text terminal-title">Our other Products/Websites</div>
            <div class="col-xs-12 col-sm-12 lang-text"><a href="http://calc.nutpan.com/" target="_blank" rel="nofollow">Online Interactive Calculator</a></div>
        </div>
        <div class="row-fluid" v-show="searchLanguage">
            <div class="col-xs-12 lang-text" v-for="link in links"><a v-bind:href="link.link">{{link.displayName}}</a></div>
        </div>
    </div>
</div>
                        </ul>
                    </div>
                </div>
                <div class="code" v-bind:class="{'pad-top-10px': !isTerminal, 'code-terminal': isTerminal, 'code-html': isHtml}">
                    
                        <div v-show="ideDisplay.main.display">
    <div class="file-name" v-show="currentFile.name" v-cloak>Project Name : <span class="filename-span">{{this.currentFile.name}}</span></div>
    <form action="https://www.jdoodle.com/" method="post" id="doodle-form" name="doodle-form">
        <div class="info-text">Your Code ...</div>
        <div>
            <textarea name="code" class="hide"></textarea>
            <div id="code">#include&lt;stdio.h&gt;conio.h&gt;

int main() {
   int x=10;
   int y=25;
   int z=x+y;
   printf(&quot;Sum of x+y = %i&quot;, z);
}
</div>
        </div>
        <div id="libraries">
            
        </div>
        
            <div class="arguments">
                <div class="info-text">CommandLine Arguments ...</div>
                <div class="form-group">
                    <input v-model="args" class="form-control" type="text" name="arguments"/>
                </div>
            </div>
        
        <div class="row">
            <div class="col-sm-6">
                <div class="info-text interaction-mode-text">Interactive mode : </div>
                <div class="interactive-mode" v-bind:class="{'checked':interactiveMode}" v-on:click="toggleInteractiveMode">
                    <div class="switch-button-background">
                        <div class="switch-button-button interactive-on" v-show="interactiveMode"></div>
                        <div class="switch-button-button interactive-off" v-show="!interactiveMode"></div>
                    </div>
                    <span class="switch-button-label off" v-show="!interactiveMode">OFF</span>
                    <span class="switch-button-label on" v-show="interactiveMode">ON</span>
                </div>
                <br/>
            </div>

            <div class="col-sm-6 text-center" v-cloak>
                <div class="info-text col-xs-4">Version:</div>
                <div class="col-xs-8">
                    <select class="form-control version-dropdown" v-model="version">
                        <option v-for="(version, index) in languageVersions" v-bind:value="index">{{version}}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="arguments form-group" v-show="!interactiveMode">
            <div class="col-xs-12"> </div>
            <div class="info-text">Stdin Inputs...</div>
            <div>
                <textarea rows=2 class="form-control" v-model="stdin"
                          name="stdin"></textarea>
            </div>
        </div>
        <div class="text-center error" v-show="showLoginToUseMessage">Please <a class="" href="javascript:" v-on:click="showSection('signIn')">Login</a> to use this function</div>
        <div class="text-center error strong" v-show="showIDEError" v-cloak>{{this.ideErrorMessage}}</div>
        <div class="text-center blue strong" v-show="showIDEAlert" v-cloak>{{this.ideAlertMessage}}</div>
        <div class="text-center hidden-print">
            <button type="button" class="btn btn-xs btn-primary" v-on:click="execute" v-cloak>
                <span v-show="!isCodeExecuting"><span class="glyphicon glyphicon-play-circle"></span> Execute </span>
                <span v-show="isCodeExecuting"><img src='static/images/spinner.gif'/> Executing...</span>
            </button>
            <button type="button" class="btn btn-xs btn-info" v-on:click="showSave">Save</button>
            <button type="button" class="btn btn-xs btn-info" title="User's Saved Files" v-on:click="showMyFiles"> My Projects</button>
            <button type="button" class="btn btn-xs btn-info" title="Recently executed codes in current Sesssion" v-on:click="showRecent"> Recent </button>
            <button type="button" class="btn btn-xs btn-info" title="Collaborate live while coding" v-on:click="collaborate">Collaborate</button>
            <div class="btn-group">
                <button type="button" class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown">More Options <span class="caret"></span></button>
                <ul class="dropdown-menu text-left pull-right">
                    <li><a href="javascript:"  v-on:click="resetAll">New Project / Clear All</a></li>
                    <li class="divider"></li>
                    <li class="share-li"><a href="javascript:" v-on:click="toggleShare">
                        <span v-show="!this.currentFile.shared">Share - Embed in a Blog or Website</span>
                        <span v-show="this.currentFile.shared">Unshare - Disable Embedding to Blog or Website</span>
                    </a></li>
                    <li><a href="javascript:"  v-on:click="showSaveAs">Save as</a></li>
                    <li><a href="javascript:"  v-on:click="copyToClipboard">Copy</a></li>
                    <li class="divider"></li>
                    <li>
                        <input type="file" id="openFile" class="hidden" v-on:change="readFileFromLocalDisk"/>
                        <label for="openFile" class="open-file-label">Open (from local file)</label>
                    </li>
                    <li><a href="javascript:" v-on:click="download">Download/Save (to local file)</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:" v-on:click="switchTheme">Switch Theme</a></li>
                    <li><a href="javascript:" v-on:click="prettyPrint">Pretty Print</a></li>
                </ul>
            </div>
            <div v-show="currentFile.id">
                <input type="checkbox" id="auto_save" v-model="currentFile.autoSave"/>
                <label for="auto_save" class="autosave">auto save when execute</label>
            </div>
            <div class="row text-center">
                <div class="col-sm-6 col-xs-12 form-group embed-url" v-show="currentFile.shared">Share URL <input type="text" class="form-control" v-model="currentFile.url" readonly/></div>
                <div class="col-sm-6 col-xs-12 form-group embed-url" v-show="currentFile.shared">
                    <div>Embed URL <input type="text" class="form-control" v-model="currentFile.embedUrl" readonly/></div>
                    <div class="how-to-embed"> (<a href="http://blog.nutpan.com/2016/07/run-programs-directly-from-your-blog-or.html" target="_blank">how to embed to a blog or website</a>)</div>
                </div>
            </div>
        </div>
        <div>
            <div class="info-text result">Result... </div>
            <div class="row text-success execute-time" v-show="!this.isCodeExecuting && executionTime">
                <div class="col-sm-6" v-show="!interactiveMode"><span>CPU Time: {{this.cpuTime}} sec(s), Memory: {{this.memory}} kilobyte(s)</span></div>
                <div v-bind:class="{'col-sm-6 text-right': !interactiveMode, 'text-left col-sm-12': interactiveMode}">compiled and executed in {{this.executionTime}} sec(s)</div>
            </div>
            <div id="output" class="editor"></div>
        </div>
        <div id="hints-bar" class="text-center hidden-print">
            <span class="hint-text img-rounded">Shortcut - <u>Ctrl+Space</u> or <u>Alt+Space</u> for Auto Complete and <u>Ctrl+Enter</u> to Execute.</span>
        </div>
        <div class="text-center hidden-print">
            <a type="button" class="btn btn-sm btn-success" href="faq.html" target="_blank"> FAQ</a>
        </div>
    </form>
</div>
                        <div class="row code-override" v-show="ideDisplay.mvn.display">
    <div class="col-xs-12">
        <form>
            <div class="form-group col-sm-6 col-sm-offset-3">
                <label>Group ID</label>
                <input type="text" class="form-control" v-model="mvnForm.group"/>
            </div>
            <div class="form-group col-sm-6 col-sm-offset-3">
                <label>Artifact ID</label>
                <input type="text" class="form-control" v-model="mvnForm.artifact"/>
            </div>
            <div class="form-group col-sm-6 col-sm-offset-3">
                <label>Version</label>
                <input type="text" class="form-control" v-model="mvnForm.version"/>
            </div>
            <div class="col-xs-12 error text-center" v-show="mvnForm.error">Please enter all values - GroupID, ArtifactID and Version</div>
            <div class="form-group text-center col-sm-6 col-sm-offset-3">
                <button type="button" class="btn btn-sm btn-primary" v-on:click="addLib">Add</button>
                <button type="button" class="btn btn-sm btn-default" v-on:click="showIdeSection('main')">Cancel</button>
            </div>
            <div class="mvn-info col-xs-12 text-center">
                Note: you can search maven artifact details in <a href="http://search.maven.org/" rel="nofollow" target="_blank"/>http://search.maven.org/</a> or <a href="http://mvnrepository.com/" rel="nofollow" target="_blank"/>http://mvnrepository.com/</a>
            </div>
        </form>
    </div>
</div>
                        <div class="row code-override" v-show="ideDisplay.save.display">
    <div class="col-xs-12">
        <div class="form-group col-sm-6 col-sm-offset-3" v-bind:class="{ 'has-error' : saveForm.error}" v-show="!saveForm.inProgress">
            <label>Project Name <span v-show="saveForm.saveAsMode">(Save As)</span></label>
            <input type='text' name='filename' class="form-control" placeholder="Hello World" v-model="saveForm.fileName"/>
        </div>
        <div class="col-xs-12 error text-center" v-show="saveForm.error && !saveForm.inProgress" v-cloak>{{this.saveForm.errorMessage}}</div>
        <div class="col-xs-12 text-center" v-if="saveForm.inProgress">
            <div class="wait-message">Trying to save your file, Please wait...</div>
            <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
</div>
        </div>
        <div class="form-group text-center col-sm-6 col-sm-offset-3">
            <button type="button" class="btn btn-sm btn-primary" v-on:click="save" v-bind:class="{'disabled': saveForm.inProgress}">Save <span v-show="saveForm.saveAsMode">As</span></button>
            <button type="button" class="btn btn-sm btn-default" v-on:click="showIdeSection('main')">Cancel</button>
        </div>
    </div>
</div>
                        <div class="row code-override my-files" v-show="ideDisplay.myFiles.display">
    <div class="col-xs-12">
        <h3>My {{this.language}} Projects</h3>
    </div>
    <div class="col-xs-12 my-files-border">
        <div class="col-xs-4 my-files-select-div">
            <select size="30" class="my-files-select" v-on:change="showFile" v-model="myFile.id">
                <option v-for="option in myFiles" v-bind:value="option[0]">
                    {{ option[1] }}
                </option>
            </select>
        </div>
        <div class="col-xs-8 text-center" v-if="myFileInProgress">
            <div class="wait-message">Loading, Please wait...</div>
            <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
</div>
        </div>
        <div class="col-xs-8 text-center" v-show="myFileServerError">
            <div class="wait-message">{{this.SERVER_ERROR}}</div>
        </div>
        <div class="col-xs-8" v-show="!myFileInProgress">
            <div id="myFilesEditor"></div>
        </div>
    </div>
    <div class="pad-top-10px text-center col-xs-12 error" v-show="myFile.showFileDeleted">
        File Deleted Successfully
    </div>
    <div class="pad-top-10px text-center col-xs-12 error" v-show="myFile.showFileDeletedError">
        Unable to Delete, please try again later or contact JDoodle support
    </div>
    <div class="form-group pad-top-10px text-center col-sm-6 share-url">
        <div v-show="myFile.shared" class="col-sm-4 pad-top-10px">Share URL :</div>
        <div v-show="myFile.shared" class="col-sm-8"> <input type="text" v-model="myFile.url" class="form-control col-sm-3" readonly/></div>
    </div>
    <div class="form-group pad-top-10px text-center col-sm-6">
        <button type="button" class="btn btn-sm btn-primary" v-on:click="openFile" v-show="myFile.id">Open</button>
        <button type="button" class="btn btn-sm btn-danger" @click="deleteFile" v-show="myFile.id">Remove</button>
        <button type="button" class="btn btn-sm btn-default" v-on:click="showIdeSection('main')">Cancel</button>
    </div>
</div>
                        <div class="row code-override recent" v-show="ideDisplay.recent.display">
  <div class="col-xs-12">
    <h3>Recent {{this.language}} Projects</h3>
  </div>
  <div class="col-xs-12 my-files-border">
    <div class="col-xs-4 my-files-select-div">
      <select size="30" class="my-files-select" v-on:change="showRecentFile" v-model="recentSelected">
        <option v-for="option in recentExecutions" v-bind:value="option">
          {{moment(option.executedAt).format("MMMM Do YYYY, h:mm:ss a")}}
        </option>
      </select>
    </div>
    <div class="col-xs-8">
      <div id="recentEditor"></div>
    </div>
  </div>
  <div class="pad-top-10px text-center col-sm-12">
    <div class="pad-top-10px text-center col-xs-12 green" v-show="recentForm.message">
      {{recentForm.message}}
    </div>
    <div class="form-group col-sm-6">
      <input type="checkbox" id="switch-storage" v-model="isLocalStoreEnabled" v-on:change="toggleRecentStorage"/>
      <label for="switch-storage">Remember recent in this browser in future sessions</label>
    </div>
    <div class="form-group col-sm-6">
        <button type="button" class="btn btn-sm btn-primary" v-on:click="openRecent" v-show="recentSelected.executedAt">Open</button>
        <button type="button" class="btn btn-sm btn-default" v-on:click="clearAllRecent">Clear All</button>
        <button type="button" class="btn btn-sm btn-default" v-on:click="showIdeSection('main')">Cancel</button>
    </div>
  </div>
</div>
                    
                </div>
                <div class="col-xs-12 ad-area-bottom hidden-print">
                    
    <!-- jdoodle-responsive-2 -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-8361819892821196"
         data-ad-slot="6449967984"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>


                </div>
                
                    <div v-once v-cloak>{{this.setLanguage("c", "GCC 5.3.0, Zapcc 5.0.0, GCC 7.2.0","jdoodle.c",false)}}</div>
                    
                
        </div>
    </div>
    <div class="col-xs-12 hidden-print">
        <div class="bottom-intro hidden-print">Your valuable inputs will help us improve this site <br/> please give your comments. Thanks.</div>
<div class="text-center row hidden-print">
    <div class="col-sm-8 col-xs-10 col-sm-offset-2 col-xs-offset-1  well well-small">
        <div class="btn-group dropdown text-center">
            <button class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">Other Languages/DBs Supported By JDoodle<span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-center switch-to">
                <div class="row-fluid">
    <div class="col-sm-12 col-xs-12 text-center">

        <div class="row-fluid">
            <div class="input-group col-xs-12 col-sm-4 col-sm-offset-4 text-center">
                <input type="text" class="form-control" placeholder="Search a Language" v-model="searchLanguage" v-on:keyUp="searchLinks"/>
                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            </div>
        </div>
        <div class="row-fluid" v-show="!searchLanguage">
            <div class="col-sm-12 lang-text"><a href="online-java-compiler.html">Java</a></div>
            <div class="col-sm-12 lang-text"><a href="html-css-javascript-online-editor.html">HTML/CSS/Javascript</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="c-online-compiler.html">C</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="online-compiler-c%2b%2b.html">C++</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="online-compiler-c%2b%2b14.html">C++ 14</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-c99-online.html">C99</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-c-sharp-online.html">C#</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="php-online-editor.html">PHP</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-perl-online.html">Perl</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-ruby-online.html">Ruby</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="python-programming-online.html">Python2</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="python3-programming-online.html">Python3</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-sql-online.html">SQL</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-scala-online.html">Scala</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-vb-dot-net-online.html">VB.Net</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-pascal-online.html">Pascal</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-haskell-online.html">Haskell</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-kotlin-online.html">Kotlin</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-swift-online.html">Swift</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-objective-c-online.html">Objective-C</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-groovy-online.html">Groovy</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-fortran-online.html">Fortran</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-brainfuck-online.html">Brainf**k</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-hack-online.html">Hack</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-tcl-online.html">TCL</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-lua-online.html">Lua</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-rust-online.html">Rust</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-r-online.html">R</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-ada-online.html">Ada</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-d-online.html">D</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-dart-online.html">Dart</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-yabasic-online.html">YaBasic</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-freebasic-online.html">Free Basic</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-clojure-online.html">Clojure</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-verilog-online.html">Verilog</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-nodejs-online.html">NodeJS</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-scheme-online.html">Scheme</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-forth-online.html">Forth</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-prolog-online.html">Prolog</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="test-bash-shell-script-online.html">Bash</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-cobol-online.html">COBOL</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-octave-matlab-online.html">OCTAVE/Matlab</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-icon-online.html">Icon</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-coffeescript-online.html">CoffeeScript</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-assembler-gcc-online.html">Assembler (GCC)</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-fsharp-online.html">F#</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-assembler-nasm-online.html">Assembler (NASM)</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-intercal-online.html">Intercal</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-nemerle-online.html">Nemerle</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-ocaml-online.html">Ocaml</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-unlambda-online.html">Unlambda</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-picolisp-online.html">Picolisp</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-clisp-online.html">CLISP</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-elixir-online.html">Elixir</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-spidermonkey-online.html">SpiderMonkey</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-rhino-online.html">Rhino JS</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-bc-online.html">BC</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-nim-online.html">Nim</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-factor-online.html">Factor</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-falcon-online.html">Falcon</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-fantom-online.html">Fantom</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-pike-online.html">Pike</a></div>

            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-go-online.html">Go</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="compile-oz-mozart-online.html">OZ-Mozart</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-lolcode-online.html">LOLCODE</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-racket-online.html">Racket</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-smalltalk-online.html">SmallTalk</a></div>
            <div class="col-xs-4 col-sm-3 col-md-2 lang-text"><a href="execute-whitespace-online.html">Whitespace</a></div>

            <div class="col-xs-12 col-sm-12 lang-text terminal-title">Online Interactive Terminals</div>
            <div class="col-xs-6 col-sm-6 lang-text"><a href="online-mysql-terminal.html">MySQL</a></div>
            <div class="col-xs-6 col-sm-6 lang-text"><a href="online-mongodb-terminal.html">MongoDB</a></div>

            <div class="col-xs-12 col-sm-12 lang-text terminal-title">Our other Products/Websites</div>
            <div class="col-xs-12 col-sm-12 lang-text"><a href="http://calc.nutpan.com/" target="_blank" rel="nofollow">Online Interactive Calculator</a></div>
        </div>
        <div class="row-fluid" v-show="searchLanguage">
            <div class="col-xs-12 lang-text" v-for="link in links"><a v-bind:href="link.link">{{link.displayName}}</a></div>
        </div>
    </div>
</div>
            </ul>
        </div>
        <div class="text-center what-next col-xs-12">Which language would you like to see next in JDoodle?</div>
        <div class="text-center col-sm-12">
            <div class="input-group col-lg-8 col-lg-offset-2" v-bind:class="{ 'has-error' : surveyForm.inputError}" v-show="!surveyForm.success && !surveyForm.exists">
                <input type="text" class="form-control" v-model="surveyForm.comment">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-success" v-on:click="survey">Add This</button>
                </div>
            </div>
            <div id="langSuggestionThanks" class="what-next what-next-thanks" v-show="surveyForm.success" v-cloak>
                Thanks for your Input!
            </div>
            <div id="langAlreadyExists" class="what-next what-next-thanks" v-show="surveyForm.exists" v-cloak>
                    {{this.surveyForm.comment}} is already available at <a v-bind:href="surveyForm.existingPath">{{this.surveyForm.existingPath}}</a>
            </div>
        </div>

        <div class="text-center what-next col-xs-12">Comments/Suggestions/Inputs...</div>
        <div class="text-center col-xs-12">
            <div class="col-xs-12 col-sm-12 col-lg-8 col-lg-offset-2 text-center" v-bind:class="{ 'has-error' : commentForm.inputError}" v-show="!commentForm.success">
                <textarea class="form-control" rows="6" v-model="commentForm.comment"></textarea>
                <div class="text-center what-next-email col-xs-12">For direct response, please include your email id in the comment <br/> or email to <a href="mailto:jdoodle@nutpan.com">jdoodle@nutpan.com</a></div>
                <button type="button" class="btn btn-primary" v-on:click="comment">Post Comment</button>
            </div>
            <div id="commentsThanks" class="what-next what-next-thanks" v-show="commentForm.success" v-cloak>
                Thanks for your Input!
            </div>
        </div>
    </div>
</div>

    </div>
</div>






                

                <div class="row">
    <div id="signin-div" class="col-xs-12" v-if="display.signIn">
        <h4 class="page-title">Sign in</h4>

        <div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
            <div class="col-xs-12 well text-center">
                <span class="new-to-jdoodle">New to JDoodle ? - </span>
                <button class="btn btn btn-success" v-on:click="showSection('register')">Register</button>
            </div>
            <form id='ajaxLoginForm' name='ajaxLoginForm' @keyup.13="signIn">
                <div class="text-center">
                    <a class="btn btn-primary" v-on:click="googleSignIn" href="javascript:">
                        <span class="sign-in-google">Sign In with <span class="fa fa-google"></span>oogle</span>
                    </a>
                </div>

                <div class="oauthOr text-center">or</div>

                <div class="error pad-bottom-10px text-center" v-show="!signInForm.inProgress">{{this.signInForm.loginErrorMessage}}</div>

                <div class="form-group" v-show="!signInForm.inProgress">
                    <label for='username'>Email ID</label>
                    <input type='text' class="form-control" name='username' id='username' v-model="signInForm.username"
                           placeholder="joe@example.com"/>
                </div>

                <div class="form-group" v-show="!signInForm.inProgress">
                    <label for='password'>Password</label>
                    <input type='password' class='form-control' name='password' id='password' v-model="signInForm.password"
                           placeholder="************"/>
                </div>
                <div class="col-xs-12 text-center" v-if="signInForm.inProgress">
                    <div class="wait-message">JDoodle is trying to signin you in, Please wait...</div>
                    <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
</div>
                </div>

                <div class="col-xs-12">
                    <div class="text-center col-xs-4 col-xs-offset-2">
                        <button type="button" class="btn btn-primary" v-bind:class="{'disabled':signInForm.inProgress}" v-on:click="signIn">Sign in</button>
                    </div>

                    <div class="text-center col-xs-4">
                        <button class="btn btn-default" type="button" v-on:click="showSection('home')">Cancel</button>
                    </div>
                </div>

                <div class="col-xs-12 text-center login-warning">Just Registered? - Please check your email before login.</div>
                <div class="col-xs-12 text-center"><a href="javascript:" v-on:click="showSection('forgotPassword')" id="btn-forgot">forgot password?</a></div>
            </form>
        </div>
    </div>
</div>


                <div class="row">
    <div id="signin-div" class="col-xs-12" v-if="display.register">
        <h4 class="page-title">Register</h4>

        <div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 col-sm-offset-2 col-md-offset-3 col-lg-offset-3" v-show="registerForm.isCompleted">
            <div class="register-thanks">
                Thanks for registering!!!
            </div>

            <div class="register-followup">
                We have sent you an email for confirmation. <br/>
                <span class="register-followup-em">Before login, Please check your email</span> to complete the registration!
            </div>
            <div class="text-center col-xs-4 col-xs-offset-4">
                <button class="btn btn-default" type="button" v-on:click="showSection('home')">Close</button>
            </div>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 col-sm-offset-2 col-md-offset-3 col-lg-offset-3" v-show="!registerForm.isCompleted">
            <div class="col-xs-12 well text-center">
                <span class="new-to-jdoodle">Already Have an Account ? - </span>
                <button class="btn btn btn-success" v-on:click="showSection('signIn')">SignIn</button>
            </div>
            <form id='registerForm' name='registerForm'>
                <div class="error pad-bottom-10px text-center" v-show="!registerForm.inProgress">
                    <div v-for="message in registerForm.message">
                        {{ message }}
                    </div>
                </div>
                <div class="form-group" v-bind:class="{ 'has-error' : registerForm.inputError.username}" v-show="!registerForm.inProgress">
                    <label for='username'>Email ID</label>
                    <input type='text' class="form-control" name='username' id='username' v-model="registerForm.username"
                           placeholder="joe@example.com"/>
                    <span class="email-privacy">(we respect your privacy. email is used for login, reset password, registration, etc only. no marketing)</span>
                </div>

                <div class="form-group" v-bind:class="{ 'has-error' : registerForm.inputError.displayName}" v-show="!registerForm.inProgress">
                    <label for='displayName'>Display Name</label>
                    <input type='text' class="form-control" name='displayName' id='displayName' v-model="registerForm.displayName"
                           placeholder="Joe Citizen"/>
                </div>

                <div class="form-group" v-show="!registerForm.inProgress" v-bind:class="{ 'has-error' : registerForm.inputError.newPassword}">
                    <label>New Password</label>
                    <input type='password' class='form-control' name='new-password' v-model="registerForm.newPassword"/>
                </div>

                <div class="form-group" v-show="!registerForm.inProgress" v-bind:class="{ 'has-error' : registerForm.inputError.retypeNewPassword}">
                    <label>Retype New Password</label>
                    <input type='password' class='form-control' name='retype-new-password' v-model="registerForm.retypeNewPassword"/>
                </div>
                <div class="col-xs-12 text-center" v-if="registerForm.inProgress">
                    <div class="wait-message">JDoodle is creating an account for you, Please wait...</div>
                    <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
</div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12 api-credits text-center"  v-bind:class="{ 'disabled' : registerForm.inProgress}" >By registering, you agree to the <a href="terms.html" target="_blank">Terms of Service</a></div>
                    <div class="text-center col-xs-4 col-xs-offset-2">
                        <button type="button" class="btn btn-primary" v-bind:class="{ 'disabled' : registerForm.inProgress}" v-on:click="register">Register</button>
                    </div>

                    <div class="text-center col-xs-4">
                        <button class="btn btn-default" type="button" v-on:click="showSection('home')">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


                <div class="row" v-if="display.forgotPassword">
    <h4 class="page-title">Forgot Password</h4>
    <div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
        <form name='forgotPasswordForm' id="forgotPasswordForm" onsubmit="return false;" >

            <div class="pad-bottom-10px text-center error" v-show="!forgotPasswordForm.isCompleted && !forgotPasswordForm.inProgress">{{this.forgotPasswordForm.message}}</div>
            <h4 class="pad-bottom-10px text-center green" v-show="forgotPasswordForm.isCompleted">Please check your email for password reset link.</h4>

            <div class="form-group" v-bind:class="{ 'has-error' : forgotPasswordForm.inputError}" v-show="!forgotPasswordForm.isCompleted && !forgotPasswordForm.inProgress">
                <label>Email</label>
                <input type='text' class='form-control' name='email' v-model="forgotPasswordForm.email"/>
            </div>
            <div class="col-xs-12 text-center" v-if="forgotPasswordForm.inProgress">
                <div class="wait-message">JDoodle is checking your details, Please wait...</div>
                <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
</div>
            </div>
            <div class="col-xs-12 text-center">
                <button class="btn btn-primary" type="button" v-bind:class="{'disabled':forgotPasswordForm.inProgress}" v-on:click="forgotPassword" v-show="!forgotPasswordForm.isCompleted">Send Me Password Reset Link</button>
                <button class="btn btn-default" type="button" v-on:click="showSection('signIn')">Close</button>
            </div>
        </form>
    </div>
</div>



                <div class="row" v-if="display.changePassword">
    <h4 class="page-title">Change Password</h4>

    <div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
        <form name='changePasswordForm' autocomplete='off'>


            <h4 class="pad-bottom-10px text-center green" v-show="changePasswordForm.isCompleted">Password Successfully Changed</h4>

            <div class="form-group" v-show="!changePasswordForm.isCompleted">
                <label>Old Password</label>
                <input type='password' class='form-control' name='old-password' v-model="changePasswordForm.oldPassword"/>
            </div>

            <div class="form-group" v-show="!changePasswordForm.isCompleted">
                <label>New Password</label>
                <input type='password' class='form-control' name='new-password' v-model="changePasswordForm.newPassword"/>
            </div>

            <div class="form-group" v-show="!changePasswordForm.isCompleted">
                <label>Retype New Password</label>
                <input type='password' class='form-control' name='retype-new-password' v-model="changePasswordForm.retypeNewPassword"/>
            </div>

            <div class="pad-bottom-10px text-center error" v-show="!changePasswordForm.isCompleted">{{this.changePasswordForm.message}}</div>

            <div class="col-xs-12 text-center">
                <input type="button" class="btn btn-primary" id="btn-change-pwd" v-on:click="changePassword" v-show="!changePasswordForm.isCompleted"  Value='Change Password' />
                <button class="btn btn-default" type="button" v-on:click="showSection('home')">Cancel</button>
            </div>
        </form>
    </div>
</div>

                <div class="row" v-if="display.changeDisplayName">
    <h4 class="page-title">Change Display Name</h4>

    <div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
            <form name='changeDisplayNameForm' autocomplete='off'>

                <div class="pad-bottom-10px text-center error" v-show="!changeDisplayNameForm.isCompleted">{{this.changeDisplayNameForm.message}}</div>
                <h4 class="pad-bottom-10px text-center green" v-show="changeDisplayNameForm.isCompleted">Display Name Successfully Updated</h4>

                <div class="form-group" v-bind:class="{ 'has-error' : changeDisplayNameForm.inputError}" v-show="!changeDisplayNameForm.isCompleted">
                    <label>New Display Name</label>
                    <input type='displayName' class='form-control' name='displayName' v-model="changeDisplayNameForm.displayName"/>
                </div>

                <div class="col-xs-12 text-center">
                    <input type="button" class="btn btn-primary" v-on:click="changeDisplayName" v-show="!changeDisplayNameForm.isCompleted" Value='Change Display Name' />
                    <button class="btn btn-default" type="button" v-on:click="showSection('home')">Close</button>
                </div>
            </form>
    </div>
</div>

            </div>
            <div v-show="!loaded" class="text-center loading">
                <h2>Welcome to JDoodle</h2>
                <div class="wait-message">app loading now, please wait...</div>
                <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
</div>

            </div>
            <div class="pre-footer"></div>
        </div>
        <div class='row footer hidden-print'>
    <div class="contact-us">contact us at <a href="mailto:jdoodle@nutpan.com" id="contact-us">jdoodle@nutpan.com</a></div>
    <div class="copyright">© 2013- 2018 Nutpan.com All Rights Reserved</div>
    <div class="twitterfollow">
        <a href="https://twitter.com/thenutpan" rel="nofollow" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @thenutpan</a>
    </div>
    <div><a href="terms.html">Terms of Use</a></div>
    <div class="terms">Terms of Use :  <span class="text-info">JDoodle uses cookies</span>. All code saved/shared belongs to the respective users and no license is enforced. JDoodle or its authors are not responsible or liable for any loss or damage of any kind resulting the use of the shared code or JDoodle. JDoodle should be used only via provided UI, automated or programmatic access is prohibited (please refer robots.txt for more info). This service comes with no warranty. JDoodle.com reserves the rights to change this terms of use at any time.</div>
</div>
    </div>

    <link rel="stylesheet" href="assets/application-aa1b567f567c878954819e19e58c28ae.css"/>

    
        
            <script type="text/javascript" src="assets/application-ide-7f7dc81e721bdbe3271ee374eb18a443.js" ></script>
        
    

    <link href='https://fonts.googleapis.com/css?family=Cinzel|Great+Vibes|Fredericka+the+Great|Amatic+SC' rel='stylesheet'
           type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    
        <script async src="../pagead2.googlesyndication.com/pagead/js/adsbygoogle.html"></script>
        
    <script type="text/javascript">
        window.onload = function() {
            setTimeout(function() {
                var ad = document.querySelector("ins.adsbygoogle");
                if (ad && ad.innerHTML.replace(/\s/g, "").length == 0) {
                    ga('send','pageview','/adblock');
                }
            }, 12000);
        };
    </script>

    
    <script>

    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-42395517-1', 'jdoodle.com');
    ga('send', 'pageview');


</script>


    
<script type="text/javascript">
    var addthis_config = addthis_config||{};
    addthis_config.pubid = 'ra-5838161cad7bac23';
    var addthisScript = document.createElement('script');
    addthisScript.setAttribute('src', '../s7.addthis.com/js/300/addthis_widget.js#domready=1')
    document.body.appendChild(addthisScript);
</script>

</body>

<!-- Mirrored from www.jdoodle.com/c-online-compiler by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jan 2018 07:15:56 GMT -->
</html>