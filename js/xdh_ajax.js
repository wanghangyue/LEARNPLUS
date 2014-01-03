/*
* --------------------------------------------------------------
 * File name   : xdh_ajax.js
* Description : Ajax�����
* Requirement : IE6+,FireFox3.0+,Opera,Chrome
 * Charset     : gb2312
*
* Copyright(C), Xing DongHai, 2010-Now, All Rights Reserved.
* Author: Xing DongHai (xingdonghai@gmail.com)
* --------------------------------------------------------------
*/
 
function $$(id){return document.getElementById(id);}
function xdh_ajax(_poolSize,_instanceName){
    this.ajaxPool = new Array();
    this.queryArr = new Array();
    this.instanceName = '';
    this.poolSize = 0;
    var _nextNum = 0;
 
    //����һ��XMLhttp����
    this.createXMLhttp = function(){
        if(typeof(ajax.ajaxPool) == null) ajax.ajaxPool = new Array();
        if(window.XMLHttpRequest){
            this.ajaxPool[_nextNum] = new XMLHttpRequest();
        }else if(window.ActiveXObject){
            this.ajaxPool[_nextNum] = new ActiveXObject("Microsoft.XMLHTTP");
        }
        _nextNum = _nextNum + 1;
    };
 
    //���캯��
    this.init = function(_poolSize,_instanceName){
        if(!isNaN(_poolSize) && _poolSize != 0) this.poolSize = _poolSize;
        if(typeof(_instanceName) == 'undefined'){
            alert('����ָ��ʵ������');
            return false;
        }else this.instanceName = _instanceName;
    };
 
    //��ȡһ��XMLhttp����
    this.getInstance = function(){
        for(_i in this.ajaxPool){
            if(this.ajaxPool[_i].readyState == 0 || this.ajaxPool[_i].readyState == 4){
                this.ajaxPool[_i].onreadystatechange = function(){};
                return this.ajaxPool[_i];
            }
        }
        if(this.poolSize == 0 || _nextNum < this.poolSize){
            this.createXMLhttp();
            return this.ajaxPool[_nextNum - 1];
        }else{
            return -1;
        }
        return false;
    };
 
    //����ִ��һ������������
    this.queryRightAway = function(_method,_url,_func,_data){
        if(window.XMLHttpRequest){
            var _o = new XMLHttpRequest();
        }else if(window.ActiveXObject){
            var _o = new ActiveXObject("Microsoft.XMLHTTP");
        }
        if(_method == 'GET'){
            var joinstr = 'ts='+Math.random();
            joinstr = (_url.indexOf('?') > -1) ? '&'+joinstr : '?'+joinstr;
            _o.open('GET',_url+joinstr,true);
            _o.send(null);
        }else if(_method == 'POST'){
            var _sendData = 'value='+encodeURIComponent(_data);
            _o.open('POST',_url,true);
            _o.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            _o.send(_sendData);
        }
        if(typeof(_func) != 'undefined' && _func != ''){
            if(typeof(_func) == 'object'){
                var _param = '';
                for(var _i=1;_i<_func.length;_i++){
                    _param = _param + ',"' + _func[_i] + '"';
                }
                _o.onreadystatechange = function(){if(_o.readyState == 4){eval('_func[0](_o'+_param+');');}};
            }else{
                _o.onreadystatechange = function(){if(_o.readyState == 4){_func(_o);}};
            }
        }
    };
 
    //��������뵽������
    this.addQueryToArr = function(_method,_url,_func,_data){
        this.queryArr.push(Array(_method,_url,_func,_data));
    };
 
    //ȡ�ö����еĵ�һ������
    this.getQueryFromArr = function(){
        return this.queryArr.shift();
    };
 
    //����ڵ�ǰ����ǰʱ�������������ڶ����У��еĻ�����ִ�ж����е�������û����ִ�б���
    this.checkQuery = function(_method,_url,_func,_data){
        var _obj = this.getInstance();
        if(_obj === false) return false;
        if(_obj === -1){
            if(typeof(_method) != 'undefined') this.addQueryToArr(_method,_url,_func,_data);
            return true;
        }
        if(this.queryArr.length != 0){
            if(typeof(_method) != 'undefined') this.addQueryToArr(_method,_url,_func,_data);
            var temp = this.getQueryFromArr();
        }else{
            var temp = Array(_method,_url,_func,_data);
        }
        temp = Array(_obj,temp[0],temp[1],temp[2],temp[3]);
        return temp;
    };
 
    //������
    //   _method������ʽ
    //      _url��������ַ
    //     _func���ص���������������飬��ô����ĵ�һ��Ԫ��Ϊ�����������������Ԫ����Ϊ�ú����Ĳ���
    //     _data��POST���������ݣ�Ŀǰ��Ϊʾ����ʹ�����޸�
    //_rightaway���Ƿ�����ִ������
    this.query = function(_method,_url,_func,_data,_rightaway){
        if(_rightaway == 1){
            this.queryRightAway(_method,_url,_func,_data);
            return true;
        }
        var _q = this.checkQuery(_method,_url,_func,_data);
        if(_q === false) return false;
        if(_q === true) return true;
        if(_q[1] == 'GET'){
            var joinstr = 'ts='+Math.random();
            joinstr = (_q[2].indexOf('?') > -1) ? '&'+joinstr : '?'+joinstr;
            _q[0].open('GET',_q[2]+joinstr,true);
            _q[0].send(null);
        }else if(_q[1] == 'POST'){
            var _sendData = 'value='+encodeURIComponent(_q[4]);
            _q[0].open('POST',_q[2],true);
            _q[0].setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            _q[0].send(_sendData);
        }
        var callback = (this.poolSize != 0) ? 'if('+this.instanceName+'.queryArr.length != 0)'+this.instanceName+'.query();' : '';
        //2010-11-05�������ڻص�������ִ����ת���ֽű�����ajaxΪ�ջ��Ƕ���
        //callback += this.instanceName + '.release();';
        callback += 'if('+this.instanceName+'){' + this.instanceName + '.release();}';
        if(typeof(_q[3]) != 'undefined' && _q[3] != ''){
            if(typeof(_q[3]) == 'object'){
                var _param = '';
                for(var _i=1;_i<_q[3].length;_i++){
                    _param = _param + ',"' + _q[3][_i] + '"';
                }
                _q[0].onreadystatechange = function(){if(_q[0].readyState == 4){eval('_q[3][0](_q[0]'+_param+');'+callback);}};
            }else{
                _q[0].onreadystatechange = function(){if(_q[0].readyState == 4){eval('_q[3](_q[0]);'+callback);}};
            }
        }
    };
 
    //�ͷŶ���
    this.release = function(isabort){
        for(_i in this.ajaxPool){
            if(isabort == 1){
                this.ajaxPool[_i].onreadystatechange = function(){};
                this.ajaxPool[_i].abort();
            }
            if(this.ajaxPool[_i].readyState == 0 || this.ajaxPool[_i].readyState == 4){
                this.ajaxPool.splice(_i,1);
                _nextNum = _nextNum - 1;
            }
        }
    };
 
    //��ʼ����
    this.init(_poolSize,_instanceName);
}
 
//�˺�������������ʱ��ֹ����
function closewindow(){
    if(typeof(ajax) != 'undefined' && ajax != null){
        _isclose = true;
        _unfinishedTotal = _unfinished = 0;
        while(ajax.ajaxPool.length != 0){
            ajax.release(1);
        }
        ajax = null;
    }
}
window.onbeforeunload = window.onunload = closewindow;
