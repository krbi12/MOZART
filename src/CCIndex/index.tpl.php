<h1>Index Controller</h1>
<p>Welcome to MOZART index controller.</p>

<h2>Download</h2>
<p>You can download MOZART from github.</p>
<blockquote>
<code>git clone git://github.com/krbi12/MOZART.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/krbi12/MOZART'>https://github.com/krbi12/MOZART</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where Lydia needs
to be able to write and create files.</p>
<blockquote>
<code>cd lydia; chmod 777 site/data</code>
</blockquote>

<p>Second, MOZART has some modules that need to be initialised. You can do this through a 
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>
