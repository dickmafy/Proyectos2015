/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Embeddable;

/**
 *
 * @author DIEGO
 */
@Embeddable
public class SeguridadorggrouprolePK implements Serializable {
    @Basic(optional = false)
    private long groupid;
    @Basic(optional = false)
    private long organizationid;
    @Basic(optional = false)
    private long roleid;

    public SeguridadorggrouprolePK() {
    }

    public SeguridadorggrouprolePK(long groupid, long organizationid, long roleid) {
        this.groupid = groupid;
        this.organizationid = organizationid;
        this.roleid = roleid;
    }

    public long getGroupid() {
        return groupid;
    }

    public void setGroupid(long groupid) {
        this.groupid = groupid;
    }

    public long getOrganizationid() {
        return organizationid;
    }

    public void setOrganizationid(long organizationid) {
        this.organizationid = organizationid;
    }

    public long getRoleid() {
        return roleid;
    }

    public void setRoleid(long roleid) {
        this.roleid = roleid;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (int) groupid;
        hash += (int) organizationid;
        hash += (int) roleid;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SeguridadorggrouprolePK)) {
            return false;
        }
        SeguridadorggrouprolePK other = (SeguridadorggrouprolePK) object;
        if (this.groupid != other.groupid) {
            return false;
        }
        if (this.organizationid != other.organizationid) {
            return false;
        }
        if (this.roleid != other.roleid) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SeguridadorggrouprolePK[ groupid=" + groupid + ", organizationid=" + organizationid + ", roleid=" + roleid + " ]";
    }
    
}
