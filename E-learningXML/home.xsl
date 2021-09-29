<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
    <html>
        <head>
            <link rel="stylesheet" href="styles.css"></link>

            
        </head>
        <body>
            <xsl:apply-templates/> 

           

        </body>
    </html>
</xsl:template>

<xsl:template match="heading">
    <h1>
        <xsl:apply-templates select="heading"/> 
    </h1>

</xsl:template>

<xsl:template match="heading">
  <h1><span style="color:#000000">
  <xsl:value-of select="."/></span></h1>
  <br />
</xsl:template>

<xsl:template match="navigation">
    <div class="menu"  >
        <xsl:apply-templates select="category"/> 
    </div>
        
</xsl:template>

<xsl:template match="category">
 <a> <span style="color:#f0f8ff">
  <xsl:value-of select="."/></span> </a>
  <img src= "learn.PNG" alt="phone" width="300px"></img>
</xsl:template>

<xsl:template match="dropdown">
    <div class="drop"  >
        <h3>Select a language to learn</h3>
       <select> <xsl:apply-templates select="option"/> </select> 
    </div>
        
</xsl:template>

<xsl:template match="option">
 <option>
 <span style="color:#000000">
  <xsl:value-of select="."/></span></option>  
  
</xsl:template>



<xsl:template match="button">
    <div class="drop"  >
        
       <button > <xsl:apply-templates select="button"/> </button> 
       
    </div>
        
</xsl:template>

<xsl:template match="button">
    <br />
<button class="button button1"> <span style="color:#000000">
  <xsl:value-of select="."/></span> </button>
</xsl:template>


<xsl:template match="footer">
   
    <div class="footer"> 
    <footer><xsl:apply-templates select="icon"/>  </footer>
</div>
        
</xsl:template>

<xsl:template match="icon">
    <br />
 <span style="color:#000000">
  <xsl:value-of select="."/></span> 
</xsl:template>

</xsl:stylesheet>