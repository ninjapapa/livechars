<h1>在你的网页中使用活字</h1>
只需对你的网页作很小的改动，就可以让你的用户方便的输入中文。
<ul>
  <li>在你的网页的<code>&lt;head&gt;</code>部分，插入下面代码：<br/>
    <code>&lt;script type="text/javascript" id="imecode" charset="gbk" src="http://www.livechars.com/ime.js"&gt;&lt;/script&gt;</code>
  </li>
  <li>修改<code>&lt;body&gt;</code>tag，加入下面内容：<br/>
    <code>&lt;body onload="LIVECHARS.on_load(true)"&gt;</code>
  </li>
  <li>请参考<a href="http://www.livechars.com/index.php">http://www.livechars.com</a>主页的原代码。
  </li>
</ul>
<h2>LIVECHARS API</h2>
<ul>
  <li><code>LIVECHARS.on_load(is_embed,taggedonly,start_inputbar)<code>
    <ul>
    <li>is_embed: true/false 是否开启嵌入模式。这个应该总是true。</li>
    <li>taggedonly: true/false 是否只在指定的输入区输入中文。如果选择true，你需要对输入中文的区域指定<code>class="LIVECHARSinput"</code>。这一参数的缺省值为false。</li>
    <li>start_inputbar: true/false 是否在启动时就显示输入条。如果是false，将在启动时显示活字图标。双击图标后弹出输入条。这一参数的缺省值为 true。</li>
    </ul>
  </li>
  <li><code>LIVECHARS.onoff(on)</code>
    <ul>
    <li>on: true/false 显示输入条，或图标。</li>
    </ul>
  </li>
  <li><code>LIVECHARS.switchyw()</code>
    切换中英文输入模式。
  </li>
</ul>
<h2>论坛嵌入实例</h2>
<a href="phpBB2/index.php">活字论坛</a>是直接使用的host网站自带的phpBB2模块。其构造上使用了template的概念。所有网页都使用了相同的template，所以嵌入活字输入法就变得相当的容易。
<ul>
  <li>首先定位包括<code>&lt;head&gt;</code>部分的template文件：<code>templates/subSilver/overall_header.tpl</code></li>
  <li>然后如前面描述的，加入javascript代码行，和修改<code>&lt;body&gt;</code>tag</li>
</ul>
对于风格比较现代的论坛，修改起来都应该一样容易。
