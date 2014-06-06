function getXmlHttp()
{
	var xhr = null;
	try
	{
		xhr = new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch(ex)
	{
		try
		{
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e)
		{
			//do nothing
		}
	}
	if (typeof XMLHttpRequest != 'undefined')
	{
		xhr = new XMLHttpRequest();
	}
	return xhr;
}

function getUrl(url, callback, data)
{
	var xhr = getXmlHttp();
	if (!xhr)
	{
		return;
	}

    var async = true;
	xhr.open("POST", url, async)
}