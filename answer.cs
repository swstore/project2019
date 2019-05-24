using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Id_project
{
    #region Answer
    public class Answer
    {
        #region Member Variables
        protected int _id;
        protected string _userid;
        protected string _questionnumber;
        protected string _answer;
        #endregion
        #region Constructors
        public Answer() { }
        public Answer(string userid, string questionnumber, string answer)
        {
            this._userid=userid;
            this._questionnumber=questionnumber;
            this._answer=answer;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Userid
        {
            get {return _userid;}
            set {_userid=value;}
        }
        public virtual string Questionnumber
        {
            get {return _questionnumber;}
            set {_questionnumber=value;}
        }
        public virtual string Answer
        {
            get {return _answer;}
            set {_answer=value;}
        }
        #endregion
    }
    #endregion
}